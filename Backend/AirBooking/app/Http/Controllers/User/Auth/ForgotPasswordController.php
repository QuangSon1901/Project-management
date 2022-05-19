<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User, App\Models\RandomModal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function forgot_password($email)
    {
        $RandomModal = new RandomModal;
        
        $user = User::where('email', $email)->first();
        if (!$user) {
            return response()->json(['status' => 403, 'msg' => 'Email này chưa đăng ký!']);
        }
        
        $newPass = $RandomModal->randomString(10);
        $update = User::where('email', $email)->update(['password' => bcrypt($newPass)]);
        if($update) {
            $data = [
                'password' => $newPass,
                'email' => $email,
                'name' => $user->name
            ];
    
            Mail::send('user_page.info.send_mail', $data, function ($message) use ($data){
                $message->from('QscCompanyCity@gmail.com', 'QSC Company');
                $message->to($data['email'], $data['name']);
                $message->subject('Lay lai mat khau');
            });

            return response()->json(['status' => 200, 'msg' => 'Đã gửi thành công, vui lòng kiểm tra email']);
        }
    }

    
}
