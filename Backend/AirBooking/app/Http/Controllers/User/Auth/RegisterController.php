<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make(
            $request->input(),
            [
                'fullname' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6'
            ],
            [
                'required' => ':attribute không được để trống',
                'email' => ':attribute sai định dạng',
                'unique' => ':attribute đã tồn tại',
                'min' => ':attribute tối thiểu :min ký tự',
            ],
            [
                'fullname' => 'Họ tên',
                'email' => 'Email',
                'password' => 'Mật khẩu',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['status' => 403, 'msg' => $validator->errors()->first()]);
        }

        $create = User::create([
            'name' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if($create) {
            Auth::attempt($request->only(['email', 'password']));
            return response()->json(['status' => 200]);
        } 
        return response()->json(['status' => 403, 'msg' => 'Email hoặc mật khẩu không đúng!']);
    }
}
