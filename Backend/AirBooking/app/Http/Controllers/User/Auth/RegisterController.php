<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $request->input();

        $create = User::create([
            'name' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($create) {
            Auth::attempt($request->only(['email', 'password']));
            return response()->json(['status' => 200, 'msg' => 'Đăng ký thành công!']);
        }
        return response()->json(['status' => 403, 'msg' => 'Email hoặc mật khẩu không đúng!']);
    }
}
