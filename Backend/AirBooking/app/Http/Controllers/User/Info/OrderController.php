<?php

namespace App\Http\Controllers\User\Info;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order()
    {
        return view('user_page.info.ticket_form');
    }
}
