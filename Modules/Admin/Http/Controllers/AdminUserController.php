<?php

namespace Modules\Admin\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminUserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::whereRaw(1);
        $users = $users->orderBy('id', 'DESC')->paginate(10);
        $viewData = [
            'users' => $users
        ];
        return view('admin::user.index', $viewData);
    }

    public function action($action, $id)
    {
        $messenge = '';
        if ($action) {
            $user = User::find($id);
            switch ($action) {
                case 'delete':
                    $user->delete();
                    $messenge = "Xóa thành công";
                    break;
                case 'status':
                    $user->active = $user->active == 1 ? 0 : 1;
                    $user->save();
                    $messenge = "Cập nhật thành công";
                    break;
            }
        }
        return redirect()->back()->with('success', $messenge);
    }

}
