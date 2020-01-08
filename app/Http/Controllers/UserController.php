<?php

namespace App\Http\Controllers;


use App\Models\Transaction;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends FrontendController
{
    /*Show tổng quan USER*/
    public function index(){
        $transactions = Transaction::paginate(1);

        $viewData = [
          'transactions' => $transactions
        ];
        return view('user.index',$viewData);
    }
    public function edit($id){
        $user = User::find($id);
        return view('user.form',compact('user'));
    }
    public function update(Request $request,$id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->updated_at=Carbon::now();
        $user->save();
        return redirect()->back()->with('success',"Cập nhật profile thành công");

    }
    public function change($id){
        $user = User::find($id);
        return view('user.password',compact('user'));
    }
    public function saveChange(Request $request,$id){
        $user = User::find($id);
        if($request->password == $request->password_again){
            $user->password = bcrypt($request->password);
            return redirect()->back()->with('success',"Thay đổi mật khẩu thành công");
        }
        return redirect()->back()->with([
            'wrong' => 'Thay đổi mật khẩu thất bại .',
            'wrong1'=> 'Vui lòng kiểm tra lại mật khẩu.'
        ]);
    }
}
