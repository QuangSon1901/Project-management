<?php

namespace App\Providers;

use App\Models\Airline;
use App\Models\Airport;
use App\Models\Bill;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Inland;
use App\Models\Cities;
use App\Models\International;
use App\Models\PaymentMethod;
use App\Models\TicketClass;
use App\Models\TimeCheckModel;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['user_page.search'], function ($view) {
            // Search
            $hint = array();
            $inland = Inland::get();
            foreach ($inland as $item) {
                $cities = Cities::where('inland_id', $item->inland_id)
                    ->join('tbl_airport', 'tbl_airport.airport_id', '=', 'tbl_cities.cities_id')
                    ->get();
                array_push($hint, array(
                    'inland' => $cities,
                    'inland_name' => $item->inland_name
                ));
            }

            $hint2 = array();
            $international = International::get();
            foreach ($international as $item) {
                $cities2 = Cities::where('international_id', $item->international_id)
                    ->join('tbl_airport', 'tbl_airport.airport_id', '=', 'tbl_cities.cities_id')
                    ->get();
                array_push($hint2, array(
                    'international' => $cities2,
                    'international_name' => $item->international_name
                ));
            }

            $view->with('hint', $hint)->with('hint2', $hint2);
        });

        View::composer(['user_page.search.search_filter'], function ($view) {
            // List Airline
            $airlineList = Airline::get();
            $view->with('airlineList', $airlineList);

            // List Ticket Class
            $ticketClass = TicketClass::get();
            $view->with('ticketClass', $ticketClass);
        });

        View::composer(['user_page.checkout.checkout_body_payment'], function ($view) {
            // List PaymentMethod
            $paymentMethodList = PaymentMethod::orderBy('payment_method_sort')->get();
            $view->with('paymentMethodList', $paymentMethodList);
        });

        View::composer(['user_page.info.ticket_form'], function ($view) {
            $TimeCheck = new TimeCheckModel;
            // List Order
            $orderList = array();

            $billOrder = Bill::select(
                'tbl_flight.flight_time_departure',
                'tbl_flight.flight_time_fly',
                'tbl_airline.airline_name',
                'tbl_airplane.airplane_name',
                'tbl_airplane.airplane_number',
                'tbl_airline.airline_logo',
                'tbl_bill.bill_id',
                'tbl_bill.bill_total_price',
                'tbl_route.departure_airport_id',
                'tbl_route.arrival_airport_id',
            )
                ->join('tbl_flight', 'tbl_bill.flight_id', '=', 'tbl_flight.flight_id')
                ->join('tbl_route', 'tbl_flight.route_id', '=', 'tbl_route.route_id')
                ->join('tbl_airplane', 'tbl_flight.airplane_id', '=', 'tbl_airplane.airplane_id')
                ->join('tbl_airline', 'tbl_airplane.airline_id', '=', 'tbl_airline.airline_id')
                ->join('tbl_customer', 'tbl_bill.customer_id', '=', 'tbl_customer.customer_id')
                ->where('tbl_customer.user_id', auth()->user()->id)
                ->orderByDesc('bill_id')->get();

            foreach ($billOrder as $item) {
                $getAliasFrom = Airport::select('tbl_airport.airport_alias', 'tbl_airport.airport_name', 'tbl_cities.cities_name')->join('tbl_cities', 'tbl_cities.cities_id', '=', 'tbl_airport.cities_id')->where('airport_id', $item->departure_airport_id)->first();
                $getAliasTo = Airport::select('tbl_airport.airport_alias', 'tbl_airport.airport_name', 'tbl_cities.cities_name')->join('tbl_cities', 'tbl_cities.cities_id', '=', 'tbl_airport.cities_id')->where('airport_id', $item->arrival_airport_id)->first();

                array_push($orderList, array(
                    'billOrder' => $item,
                    'aliasFrom' => $getAliasFrom,
                    'aliasTo' => $getAliasTo,
                    'timeArr' => $TimeCheck->add2time($item->flight_time_departure, $item->flight_time_fly),
                ));
            }
            $view->with('orderList', $orderList);
        });
    }
}
