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
use App\Models\RandomModal;
use App\Models\TicketHasCustomer;
use App\Models\TimeCheckModel;

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

    public function checkout_payment(CheckoutRequest $request) {
        
        $checkoutInfo = $request->input();

        $flight_id = Ticket::select('flight_id')->where('ticket_id', $request->ticketID)->first();
        $checkoutInfo['flightID'] = $flight_id->flight_id;
        Session::put('checkoutInfo', $checkoutInfo);
        return view('user_page.checkout.checkout_body_payment', compact('checkoutInfo'));
    }

    public function checkout_completed(PaymentMethodRequest $request) {
        $checkoutInfo = Session::get('checkoutInfo');

        $customerData = array(
            'customer_name' => $checkoutInfo['contactName'],
            'customer_phone' => $checkoutInfo['contactPhone'],
            'customer_email' => $checkoutInfo['contactEmail'],
            'user_id' => auth()->user()->id,
        );

        if($checkoutInfo['contactGender'] == 0){
            $customerData['customer_gender'] = 'Nam';
        } else {
            $customerData['customer_gender'] = 'Nữ';
        }

        $customer_id = Customer::insertGetId($customerData);

        if($customer_id) {
            $ticketData = array(
                'own_ticket_name' => $checkoutInfo['customerName'],
                'ticket_id' => $checkoutInfo['ticketID'],
                'customer_id' => $customer_id,
                'ticket_has_customer_status' => 1,
            );

            if($checkoutInfo['customerGender'] == 0){
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

            $ticketItem = Session::get('ticketItem');


            return view('user_page.checkout.checkout_completed', compact(['checkoutInfo', 'ticketItem', 'billID']));
        }

        return redirect()->back();
    }
}
