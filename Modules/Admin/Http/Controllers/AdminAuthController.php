<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function getLogin(){
        return view('admin::auth.login');
    }
    public function postLogin(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admins')->attempt($credentials)){
            return redirect()->route('admin.get.dashboard');
        }
        return redirect()->back();
    }
    public function getLogout(){
        Auth::guard('admins')->logout();
        return redirect()->route('admin.get.login');
    }
    public function getProfile(){
        $id = get_data_user('admins','id');
        $admin = Admin::find($id);;

        return view('admin::profile.index',compact('admin'));
    }
}
