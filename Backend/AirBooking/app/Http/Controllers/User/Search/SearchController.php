<?php

namespace App\Http\Controllers\User\Search;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchFlightRequest;
use App\Models\Airport;
use App\Models\Flight;
use App\Models\Route;
use App\Models\Ticket;
use App\Models\TimeCheckModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(SearchFlightRequest $request, $dateFlightDepp = null)
    {
        $filter = array();
        if(!$dateFlightDepp) {
            $filter['dateFromInput'] = $request->dateFromInput;
        }else {
            $filter['dateFromInput'] = $dateFlightDepp;
        }

        $ticketList = array();
        $TimeCheck = new TimeCheckModel;

        $flights = Flight::select(
            'tbl_flight.flight_id',
            'tbl_airline.airline_name',
            'tbl_airplane.airplane_name',
            'tbl_airplane.airplane_number',
            'tbl_flight.flight_time_departure',
            'tbl_flight.flight_time_fly',
            'tbl_airline.airline_logo'
        )
            ->join('tbl_route', 'tbl_flight.route_id', '=', 'tbl_route.route_id')
            ->join('tbl_airplane', 'tbl_flight.airplane_id', '=', 'tbl_airplane.airplane_id')
            ->join('tbl_airline', 'tbl_airplane.airline_id', '=', 'tbl_airline.airline_id')
            ->where('tbl_route.departure_airport_id', $request->inputFromID)
            ->where('tbl_route.arrival_airport_id', $request->inputToID)
            ->whereDate('tbl_flight.flight_time_departure', date('Y-m-d', strtotime($filter['dateFromInput'])))
            ->get();

        $getAliasFrom = Airport::select('airport_alias', 'airport_name')->where('airport_id', $request->inputFromID)->first();
        $getAliasTo = Airport::select('airport_alias', 'airport_name')->where('airport_id', $request->inputToID)->first();

        foreach ($flights as $item) {
            $ticket = Ticket::select('tbl_ticket.ticket_id', 'tbl_ticket_class.ticket_class_name', 'tbl_ticket.ticket_price')
                ->join('tbl_ticket_class', 'tbl_ticket.ticket_class_id', '=', 'tbl_ticket_class.ticket_class_id')
                ->where('tbl_ticket.flight_id', $item->flight_id)
                ->get();

            array_push($ticketList, array(
                'aliasFrom' => $getAliasFrom,
                'aliasTo' => $getAliasTo,
                'nameFrom' => $request->inputFromText,
                'nameTo' => $request->inputToText,
                'timeArr' => $TimeCheck->add2time($item->flight_time_departure, $item->flight_time_fly),
                'flight' => $item,
                'ticket' => $ticket
            ));
        }

        // Get date depp
        $date = date_create(date('Y-m-d', strtotime($request->dateFromInput)));
        date_modify($date, "-3 days");

        $dateList = array();
        for ($i = 0; $i < 20; $i++) {
            date_modify($date, "+1 days");
            array_push($dateList, date_format($date, "d-m-Y"));
        }

        Session::put('formDataSearch', $request->input());
        Session::put('dateList', $dateList);

        session()->flashInput($request->input());
        return view('user_page.search.search_body', compact('ticketList'));
    }
}
