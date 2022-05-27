<?php

namespace App\Http\Controllers\User\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contact(Request $request) {
        if ($request->isMethod('get')) {
            return view('user_page.contact.contact_body');
        }

        $validator = Validator::make(
            $request->input(),
            [
                'nameContact' => 'required',
                'phoneContact' => 'required|min:10',
                'emailContact' => 'required|email',
                'commentContact' => 'required',
            ],
            [
                'required' => ':attribute không được để trống',
                'email' => ':attribute sai định dạng',
                'min' => ':attribute phải nhiều hơn :min số',
            ],
            [
                'nameContact' => 'Họ tên',
                'phoneContact' => 'Số điện thoại',
                'emailContact' => 'Email',
                'commentContact' => 'Nội dung',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['status' => 403, 'msg' => $validator->errors()->first()]);
        }

        $create = Contact::insert([
            'contact_name' => $request->nameContact,
            'contact_phone' => $request->phoneContact,
            'contact_email' => $request->emailContact,
            'contact_comment' => $request->commentContact,
        ]);

        if ($create) {
            return response()->json(['status' => 200, 'msg' => 'Gửi thành công!']);
        }
        return response()->json(['status' => 403, 'msg' => 'Gửi thất bại!']);
    }
}
