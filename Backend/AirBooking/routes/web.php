<?php

use App\Http\Controllers\User\Auth\ForgotPasswordController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
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
    Route::post('/login', [LoginController::class, 'login'])->middleware('CheckLogin');
    Route::post('/register', [RegisterController::class, 'register'])->middleware('CheckLogin');
    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->back();
    })->middleware('auth');
    Route::get('/forgot-password/{email}', [ForgotPasswordController::class, 'forgot_password']);


    Route::group(['prefix' => '/info'], function () {
        Route::match(['get', 'post'], '/', [InfoController::class, 'info'])->middleware('auth');
        Route::match(['get', 'post'], '/change-pass', [InfoController::class, 'change_pass'])->middleware('auth');
        Route::get('/order', [OrderController::class, 'order'])->middleware('auth');
    });

    Route::group(['prefix' => '/search'], function () {
        Route::get('/', [SearchController::class, 'search'])->name('searchFlight');
    });
});
