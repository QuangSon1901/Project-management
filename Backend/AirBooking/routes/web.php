<?php

use App\Http\Controllers\User\Auth\ForgotPasswordController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\User\Checkout\CheckoutController;
use App\Http\Controllers\User\Contact\ContactController;
use App\Http\Controllers\User\Info\InfoController;
use App\Http\Controllers\User\Info\OrderController;
use App\Http\Controllers\User\Search\SearchController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user_layout');
})->middleware('preventBackHistory');
Route::get('/home', function () {
    return view('user_layout');
})->name('home')->middleware('preventBackHistory');


Route::middleware('preventBackHistory')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::post('/login', [LoginController::class, 'login']);
        Route::post('/register', [RegisterController::class, 'register']);
    });

    Route::middleware('auth')->group(function () {
        Route::get('/logout', function () {
            Auth::logout();
            return redirect()->back();
        });

        Route::group(['prefix' => '/info'], function () {
            Route::match(['get', 'post'], '/', [InfoController::class, 'info']);
            Route::match(['get', 'post'], '/change-pass', [InfoController::class, 'change_pass']);
            Route::get('/order', [OrderController::class, 'order']);
            Route::get('/order-detail/{id}', [OrderController::class, 'order_detail']);
        });
        Route::group(['prefix' => '/checkout'], function () {
            Route::get('/', [CheckoutController::class, 'checkout'])->name('checkoutTicket');
            Route::get('/payment', [CheckoutController::class, 'checkout_payment'])->name('checkoutPayment');
            Route::get('/checkout-completed', [CheckoutController::class, 'checkout_completed'])->name('checkoutComplete');
        });
    });

    Route::get('/checkout/checkout-detail/{id}', [CheckoutController::class, 'checkout_detail']);

    Route::get('/forgot-password/{email}', [ForgotPasswordController::class, 'forgot_password']);

    Route::group(['prefix' => '/search'], function () {
        Route::get('/', [SearchController::class, 'search'])->name('searchFlight');
        Route::get('/filter', [SearchController::class, 'filter'])->name('filterFlight');
    });

    Route::match(['get', 'post'], '/contact', [ContactController::class, 'contact']);
});


Route::get('/test', function() {
    return View('user_page.checkout.send_mail_success');
});
