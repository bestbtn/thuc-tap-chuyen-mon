<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\FrontendController;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends FrontendController
{
    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $code = bcrypt(md5(time().$request->email));
        $user->code = $code;
        $user->code_active = $code;
        $user->time_active = Carbon::now();
        $user->save();
        $email = $user->email;
        $user->save();
        if ($user->id) {
            $url = route('user.verify.account',['id'=>$user->id,'code'=>$code]);
            $data = [
                'route' => $url
            ];
            Mail::send('email.verify_account',$data,function($messenge) use ($email){
                $messenge->to($email,'Verify account')->subject('Kích hoạt tài khoản');
            });
            return redirect()->route('get.login')->with('success','Bạn đã đăng kí tài khoản thành công. Vui lòng xác nhận mật khẩu qua email đăng kí.');
        }
        return redirect()->back();
    }

    public function verifyAccount(Request $request)
    {
        $code = $request->code;
        $id = $request->id;
        $checkUser = User::where([
            'code' => $code,
            'id'    => $id
        ])->first();

        if (!$checkUser){
            return redirect()->back()->with('wrong','Link bạn sử dụng không đúng. Vui lòng kiểm tra lại');
        }
        $checkUser->active = 2;
        $checkUser->save();
        return redirect()->back()->with('success',"Bạn đã kích hoạt tài khoản thành công");
    }
}
