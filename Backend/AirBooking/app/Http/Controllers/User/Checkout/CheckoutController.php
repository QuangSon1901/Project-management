<?php

namespace App\Http\Controllers\User\Checkout;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Http\Requests\PaymentMethodRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Airport;
use App\Models\Bill;
use App\Models\Customer;
use App\Models\Flight;
use App\Models\PaymentMethod;
use App\Models\RandomModal;
use App\Models\TicketHasCustomer;
use App\Models\TimeCheckModel;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $formDataSearch = Session::get('formDataSearch');

        $TimeCheck = new TimeCheckModel;

        $ticket = Ticket::select(
            'tbl_ticket.ticket_id',
            'tbl_ticket_class.ticket_class_name',
            'tbl_ticket.ticket_price',
            'tbl_flight.flight_time_departure',
            'tbl_flight.flight_time_fly',
            'tbl_airline.airline_name',
            'tbl_airplane.airplane_name',
            'tbl_airplane.airplane_number',
            'tbl_airline.airline_logo'
        )
            ->join('tbl_ticket_class', 'tbl_ticket.ticket_class_id', '=', 'tbl_ticket_class.ticket_class_id')
            ->join('tbl_flight', 'tbl_ticket.flight_id', '=', 'tbl_flight.flight_id')
            ->join('tbl_route', 'tbl_flight.route_id', '=', 'tbl_route.route_id')
            ->join('tbl_airplane', 'tbl_flight.airplane_id', '=', 'tbl_airplane.airplane_id')
            ->join('tbl_airline', 'tbl_airplane.airline_id', '=', 'tbl_airline.airline_id')
            ->where('ticket_id', $request->ticket_id)
            ->first();

        $getAliasFrom = Airport::select('airport_alias', 'airport_name')->where('airport_id', $formDataSearch['inputFromID'])->first();
        $getAliasTo = Airport::select('airport_alias', 'airport_name')->where('airport_id', $formDataSearch['inputToID'])->first();

        $ticketItem = array(
            'aliasFrom' => $getAliasFrom,
            'aliasTo' => $getAliasTo,
            'nameFrom' => $formDataSearch['inputFromText'],
            'nameTo' => $formDataSearch['inputToText'],
            'timeArr' => $TimeCheck->add2time($ticket->flight_time_departure, $ticket->flight_time_fly),
            'ticket' => $ticket,
        );

        Session::put('ticketItem', $ticketItem);
        return view('user_page.checkout.checkout_body_info');
    }

    public function checkout_payment(CheckoutRequest $request)
    {

        $checkoutInfo = $request->input();

        $flight_id = Ticket::select('flight_id')->where('ticket_id', $request->ticketID)->first();
        $checkoutInfo['flightID'] = $flight_id->flight_id;
        Session::put('checkoutInfo', $checkoutInfo);
        return view('user_page.checkout.checkout_body_payment', compact('checkoutInfo'));
    }

    public function checkout_completed(PaymentMethodRequest $request)
    {
        $checkoutInfo = Session::get('checkoutInfo');
        session()->flashInput($request->input());
        $paymentMethod = PaymentMethod::where('payment_method_id', $request->payment_method)->first();
        if ($paymentMethod->payment_method_status == 2) {
            return redirect()->back()->withErrors(['message' => 'Phương thức thanh toán này đang bảo trì, vui lòng chọn phương thức thanh toán khác!']);
        }

        $customerData = array(
            'customer_name' => $checkoutInfo['contactName'],
            'customer_phone' => $checkoutInfo['contactPhone'],
            'customer_email' => $checkoutInfo['contactEmail'],
            'user_id' => auth()->user()->id,
        );

        if ($checkoutInfo['contactGender'] == 0) {
            $customerData['customer_gender'] = 'Nam';
        } else {
            $customerData['customer_gender'] = 'Nữ';
        }

        $customer_id = Customer::insertGetId($customerData);

        if ($customer_id) {
            $ticketData = array(
                'own_ticket_name' => $checkoutInfo['customerName'],
                'ticket_id' => $checkoutInfo['ticketID'],
                'customer_id' => $customer_id,
                'ticket_has_customer_status' => 1,
            );

            if ($checkoutInfo['customerGender'] == 0) {
                $ticketData['own_ticket_gender'] = 'Nam';
            } else {
                $ticketData['own_ticket_gender'] = 'Nữ';
            }

            $getPrice = Ticket::where('ticket_id', $checkoutInfo['ticketID'])->first();

            $RandomModal = new RandomModal;
            $billData = array(
                'bill_total_price' => $getPrice->ticket_price,
                'bill_status' => 0,
                'customer_id' => $customer_id,
                'payment_method_id' => $request->payment_method,
                'flight_id' => $checkoutInfo['flightID'],
            );

            TicketHasCustomer::insert($ticketData);
            $billID = Bill::insertGetId($billData);


            $data = [
                'id' => $billID,
                'email' => $checkoutInfo['contactEmail'],
                'name' => $checkoutInfo['contactName']
            ];
            Mail::send('user_page.checkout.send_mail_success', $data, function ($message) use ($data) {
                $message->from('QscCompanyCity@gmail.com', 'QSC Company');
                $message->to($data['email'], $data['name']);
                $message->subject('Đặt vé thành công');
            });


            $ticketItem = Session::get('ticketItem');


            return view('user_page.checkout.checkout_completed', compact(['checkoutInfo', 'ticketItem', 'billID']));
        }

        return redirect()->back();
    }

    public function send_mail_success($id)
    {
        $TimeCheck = new TimeCheckModel;

        $billOrder = Bill::select(
            'tbl_flight.flight_time_departure',
            'tbl_flight.flight_time_fly',
            'tbl_airline.airline_name',
            'tbl_airplane.airplane_name',
            'tbl_airplane.airplane_number',
            'tbl_airline.airline_logo',
            'tbl_bill.bill_id',
            'tbl_bill.bill_total_price',
            'tbl_bill.bill_created_at',
            'tbl_route.departure_airport_id',
            'tbl_route.arrival_airport_id',
            'tbl_customer.*',
            'tbl_payment_method.*'
        )
            ->join('tbl_flight', 'tbl_bill.flight_id', '=', 'tbl_flight.flight_id')
            ->join('tbl_route', 'tbl_flight.route_id', '=', 'tbl_route.route_id')
            ->join('tbl_airplane', 'tbl_flight.airplane_id', '=', 'tbl_airplane.airplane_id')
            ->join('tbl_airline', 'tbl_airplane.airline_id', '=', 'tbl_airline.airline_id')
            ->join('tbl_customer', 'tbl_bill.customer_id', '=', 'tbl_customer.customer_id')
            ->join('tbl_payment_method', 'tbl_bill.payment_method_id', '=', 'tbl_payment_method.payment_method_id')
            ->where('tbl_customer.user_id', auth()->user()->id)
            ->where('tbl_bill.bill_id', $id)
            ->first();

        $getAliasFrom = Airport::select('tbl_airport.airport_alias', 'tbl_airport.airport_name', 'tbl_cities.cities_name')->join('tbl_cities', 'tbl_cities.cities_id', '=', 'tbl_airport.cities_id')->where('airport_id', $billOrder->departure_airport_id)->first();
        $getAliasTo = Airport::select('tbl_airport.airport_alias', 'tbl_airport.airport_name', 'tbl_cities.cities_name')->join('tbl_cities', 'tbl_cities.cities_id', '=', 'tbl_airport.cities_id')->where('airport_id', $billOrder->arrival_airport_id)->first();

        $getListOwnTicket = TicketHasCustomer::where('customer_id', $billOrder->customer_id)->get();

        $orderList = array(
            'billOrder' => $billOrder,
            'aliasFrom' => $getAliasFrom,
            'aliasTo' => $getAliasTo,
            'timeArr' => $TimeCheck->add2time($billOrder->flight_time_departure, $billOrder->flight_time_fly),
            'ownTicket' => $getListOwnTicket
        );

        return $orderList;
    }

    public function checkout_detail($id)
    {
        $orderList = $this->send_mail_success($id);
        return view('user_page.checkout.mail_success', compact(['orderList']));
    }
}
