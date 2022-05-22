<?php

namespace App\Http\Controllers\User\Info;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use App\Models\Bill;
use App\Models\TicketHasCustomer;
use App\Models\TimeCheckModel;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order()
    {
        return view('user_page.info.ticket_form');
    }

    public function order_detail($id)
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

        return view('user_page.info.ticket_form_detail', compact('orderList'));
    }
}
