<?php

namespace App\Http\Controllers\User\Checkout;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Airport;
use App\Models\Flight;
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
            'ticket' => $ticket
        );

        Session::put('ticketItem', $ticketItem);
        return view('user_page.checkout.checkout_body_info');
    }

    public function checkout_payment(Request $request) {
        
        $formData = $request->input();
        return view('user_page.checkout.checkout_body_payment', compact('formData'));
    }
}
