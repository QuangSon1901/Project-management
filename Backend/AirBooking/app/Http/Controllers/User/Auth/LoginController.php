<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make(
            $request->input(),
            [
                'email' => 'required|email',
                'password' => 'required|min:6'
            ],
            [
                'required' => ':attribute không được để trống',
                'email' => ':attribute sai định dạng',
                'min' => ':attribute tối thiểu :min ký tự',
            ],
            [
                'email' => 'Email',
                'password' => 'Mật khẩu',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['status' => 403, 'msg' => $validator->errors()->first()]);
        }

        if (Auth::attempt($request->only(['email', 'password']))) {
            return response()->json(['status' => 200]);
        }
        return response()->json(['status' => 403, 'msg' => 'Email hoặc mật khẩu không đúng!']);
    }
}
