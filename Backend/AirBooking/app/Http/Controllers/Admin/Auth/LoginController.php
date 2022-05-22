<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('admin_page.login.login_layout');
        }

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

        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('admin')->attempt($credentials)) {
            return response()->json(['status' => 200, 'msg' => 'Đăng nhập thành công!']);
        }
        return response()->json(['status' => 403, 'msg' => 'Email hoặc mật khẩu không đúng!']);
    }
}
