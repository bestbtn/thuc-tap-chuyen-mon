<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Products_favorite;
use App\Models\Transaction;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends FrontendController
{
    /*Show tổng quan USER*/
    public function index()
    {
        $transactions = Transaction::paginate(1);

        $viewData = [
            'transactions' => $transactions
        ];
        return view('user.index', $viewData);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.form', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->updated_at = Carbon::now();
        $user->save();
        return redirect()->back()->with('success', "Cập nhật profile thành công");

    }

    public function change($id)
    {
        $user = User::find($id);
        return view('user.password', compact('user'));
    }

    public function saveChange(Request $request, $id)
    {
        $user = User::find($id);
        if ($request->password == $request->password_again) {
            $user->password = bcrypt($request->password);
            return redirect()->back()->with('success', "Thay đổi mật khẩu thành công");
        }
        return redirect()->back()->with([
            'wrong' => 'Thay đổi mật khẩu thất bại .',
            'wrong1' => 'Vui lòng kiểm tra lại mật khẩu.'
        ]);
    }

    public function addFavorite($productId)
    {
        $favoriteExists = Products_favorite::where(
            [
                'pf_product_id' => $productId,
                'pf_user_id' => get_data_user('web')
            ])->first();
        if ($favoriteExists) {
            return redirect()->back()->with('wrong', "Sản phẩm đã có trong danh sách yêu thích");
        }
        $product = new Products_favorite();
        $product->pf_user_id = get_data_user('web');
        $product->pf_product_id = $productId;
        $product->save();
        return redirect()->back()->with('success', "Đã thêm sản phẩm vào danh sách yêu thích");
    }

    public function getListFavorite()
    {
        $user = get_data_user('web');
        $userWishList = Products_favorite::count();
       // dd($userWishList);
        $products = Products_favorite::join('products','products_favorite.pf_product_id','=','products.id')
                    ->join('users', 'products_favorite.pf_user_id','=','users.id')
                    ->select(
                        'products_favorite.*',
                        'products.pro_name',
                        'products.pro_price',
                        'products.pro_avatar',
                        'products.pro_total_number_rating',
                        'products.pro_total_rating'
                        )->get();
        ;

        $data = [
            'userWishList'=>$userWishList,
            'products'=>$products
        ];

        return view('wishlist.index',$data);
    }
    public function deleteFavorite($id){
        $product = Products_favorite::find($id);
        $product->delete();
        return redirect()->back()->with('success',"Đã xóa sản phẩm ra danh sách yêu thích");;
    }
}
