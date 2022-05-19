<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $request->all();

        if (Auth::attempt($request->only(['email', 'password']))) {
            return response()->json(['status' => 200, 'msg' => 'Đăng nhập thành công!']);
        }
        return response()->json(['status' => 403, 'msg' => 'Email hoặc mật khẩu không đúng!']);
    }
}
