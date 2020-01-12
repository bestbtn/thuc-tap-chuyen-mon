<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontendController;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends FrontendController
{
    use AuthenticatesUsers;
    public function getLogin(){
        return view('auth.login');
    }
    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = User::where('email',$request->email)->first();
        if ( $user['active'] == 1){
            return redirect()->back()->with('wrong','Vui lòng kích hoạt tài khoản của bạn để đăng nhập');
        }
        if (\Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('home');
        }
        return redirect()->back();
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
