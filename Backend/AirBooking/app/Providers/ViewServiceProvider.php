<?php

namespace App\Providers;

use App\Models\Airline;
use App\Models\Airport;
use App\Models\Bill;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Inland;
use App\Models\Cities;
use App\Models\Contact;
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

        View::composer(['admin_page.navbar'], function ($view) {
            // List Notify
            $notifyList = Contact::where('contact_status', 1)->orderByDesc('contact_id')->get();
            $view->with('notifyList', $notifyList);
        });
    }
}
