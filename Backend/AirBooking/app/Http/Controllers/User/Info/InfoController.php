<?php

namespace App\Http\Controllers\User\Info;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class InfoController extends Controller
{
    public function info(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('user_page.info.info_form');
        }

        $validator = Validator::make(
            $request->input(),
            [
                'name' => 'required',
                'email' => 'required|email',
            ],
            [
                'required' => ':attribute không được để trống',
                'email' => ':attribute sai định dạng',
            ],
            [
                'name' => 'Họ tên',
                'email' => 'Email',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['status' => 403, 'msg' => $validator->errors()->first()]);
        }

        if ($request->file('avatar')) {
            $file = $request->file('avatar');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $data = array();
            $data['name'] = $request->name;
            $data['phone'] = $request->phone;
            $data['email'] = $request->email;
            $data['address'] = $request->address;
            $data['gender'] = $request->gender;
            $data['birthday'] = date('Y-m-d', strtotime($request->birthday));
            $data['avatar'] = $file_name;

            $update = User::find(auth()->user()->id)->update($data);

            if ($update) {
                move_uploaded_file($file, "upload/" . $file_name);
                return response()->json(['status' => 200, 'msg' => 'Cập nhật thành công']);
            }
        } else {
            $data = array();
            $data['name'] = $request->name;
            $data['phone'] = $request->phone;
            $data['email'] = $request->email;
            $data['address'] = $request->address;
            $data['gender'] = $request->gender;
            $data['birthday'] = date('Y-m-d', strtotime($request->birthday));

            $update = User::find(auth()->user()->id)->update($data);

            if ($update) {
                return response()->json(['status' => 200, 'msg' => 'Cập nhật thành công']);
            }
        }
        return response()->json(['status' => 403, 'msg' => 'Cập nhật thất bại']);
    }

    public function change_pass(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('user_page.info.change_pass');
        }

        $validator = Validator::make(
            $request->input(),
            [
                'oldPassword' => 'required|min:6',
                'newPassword' => 'required|min:6',
                'comfirmPassword' => 'required|required_with:newPassword|same:newPassword|min:6'
            ],
            [
                'required' => ':attribute không được để trống',
                'min' => ':attribute tối thiểu :min ký tự',
                "comfirmPassword.required_with" => "Vui lòng xác nhận mật khẩu",
                "comfirmPassword.same" => "Xác nhận mật khẩu chưa chính xác"
            ],
            [
                'oldPassword' => 'Mật khẩu hiện tại',
                'newPassword' => 'Mật khẩu mới',
                'comfirmPassword' => 'Xác nhận mật khẩu',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['status' => 403, 'msg' => $validator->errors()->first()]);
        }

        if (Hash::check($request->oldPassword, auth()->user()->password)) {
            User::find(auth()->user()->id)->update(['password' => Hash::make($request->newPassword)]);
            return response()->json(['status' => 200, 'msg' => 'Thay đổi mật khẩu thành công, vui lòng đăng nhập lại!']);
        } else {
            return response()->json(['status' => 403, 'msg' => 'Mật khẩu hiện tại không đúng']);
        }
    }
}
