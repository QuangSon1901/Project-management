<?php

use App\Http\Controllers\Admin\Account\UserController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('admin.login');

Route::middleware('auth:admin')->group(function (){
    Route::get('/logout', function() {
        Auth::guard('admin')->logout();
        return redirect()->back();
    });
    Route::get('/', [DashboardController::class, 'dashboard']);

    Route::get('/dashboard', [DashboardController::class, 'dashboard']);

    Route::group(['prefix' => '/user'], function () {
        Route::get('/', [UserController::class, 'user']);
        Route::get('/change-status-user', [UserController::class, 'change_status_user']);
        Route::get('/reset-pass', [UserController::class, 'reset_pass']);
        Route::get('/del-user', [UserController::class, 'del_user']);
    });
});