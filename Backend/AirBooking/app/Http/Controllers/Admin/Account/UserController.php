<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        $userList = User::all();

        $

        $userList = $this->paginate($userList);
        return view('admin_page.account.user', compact('userList'));
    }

    public function change_status_user(Request $request)
    {
        $getUser = User::find($request->id);
        if ($getUser->status == 1) {
            User::where('id', $request->id)->update(['status' => 0]);
            return response()->json(['status' => 0]);
        } elseif ($getUser->status == 0) {
            User::where('id', $request->id)->update(['status' => 1]);
            return response()->json(['status' => 1]);
        }
        return response()->json(['status' => 403, 'msg' => 'Cập nhật thất bại!']);
    }

    public function reset_pass(Request $request)
    {
        $newPass = 'QSC' . rand(100000, 999999);
        $data = array();
        $data['password'] = bcrypt($newPass);

        $reset_password = User::where('id', $request->id)->update($data);
        if ($reset_password) {
            return response()->json(['status' => 200, 'msg' => 'Cập nhật thành công!', 'newpass' => $newPass]);
        }
        return response()->json(['status' => 403, 'msg' => 'Cập nhật thất bại!']);
    }

    public function del_user(Request $request)
    {
        $delUser = User::where('id', $request->id)->delete();
        if ($delUser) {
            return response()->json(['status' => 200, 'msg' => 'Xóa thành công!']);
        }
        return response()->json(['status' => 403, 'msg' => 'Xóa thất bại!']);
    }
}
