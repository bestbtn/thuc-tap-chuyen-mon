<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestResetPassword;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function getFormResetPassword()
    {
        return view('auth.passwords.email');
    }

    public function sendCodeResetPassword(Request $request)
    {
        $email = $request->email;
        $checkUser = User::where('email',$email)->first();
        if (!$checkUser){
            return redirect()->back()->with('wrong','Email không tồn tại');
        }
        $code = bcrypt(md5(time().$email));
        $checkUser->code = $code;
        $checkUser->time_code = Carbon::now();
        $checkUser->save();
        $url = route('get.link.reset.password',['code'=>$checkUser->code,'email'=>$email]);
        $data = [
            'route' => $url
        ];
        Mail::send('email.reset_password',$data,function($messenge) use ($email){
            $messenge->to($email,'Reset Password')->subject('Lấy lại mật khẩu');
        });
        return redirect()->back()->with('success',"Link lấy lại mật khẩu đã được gửi vào email của bạn");
    }
    public function resetPassword(Request $request)
    {
        $code = $request->code;
        $email = $request->email;
        $checkUser =User::where([
            'code'=>$code,
            'email'=>$email
        ])->first();
        if (!$checkUser){
            return redirect('/')->with('danger',"Đường dẫn lấy lại mật khẩu không đúng. Vui lòng thử lại sau");
        }

        return view('auth.passwords.reset');
    }
    public  function saveResetPassword(RequestResetPassword $requestResetPassword){
        $code = $requestResetPassword->code;
        $email = $requestResetPassword->email;
        $checkUser =User::where([
            'code'=>$code,
            'email'=>$email
        ])->first();
        if (!$checkUser){
            return redirect('/')->with('danger',"Đường dẫn lấy lại mật khẩu không đúng. Vui lòng thử lại sau");
        }
        $checkUser->password = bcrypt($requestResetPassword->password);
        $checkUser->save();
        return redirect()->back()->with('success','Bạn đã thay đổi mật khẩu thành công');

    }
}
