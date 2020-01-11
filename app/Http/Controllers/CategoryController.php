<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends FrontendController
{
    public function getListProduct(Request $request){
        $url = $request->segment(2);
        $url = preg_split('/(-)/i',$url);
        $products = Product::where( 'pro_active', Product::STATUS_PUBLIC);
        $cateProduct = [];
        $orderBy=[];
        if ($id = array_pop($url)){
            $cateProduct= Category::find($id);
            $products = Product::where('pro_category_id',$id)
                ->orderBy('id','DESC');
        }
        if ($request->has('new')) {
            $orderBy = 'new';
        }
        if ($request->has('asc')) {
            $orderBy = 'asc';
        }
        if ($request->has('new')) {
            $orderBy = 'desc';
        }

        //tìm kiếm sản phẩm
        if ($request->search){
            $products = $products->where('pro_name','like','%'.$request->search.'%');
        }
        // sắp xếp theo giá
        if ($request->price){
            $price = $request->price;
            switch ($price){
                case "1":
                    $products->where('pro_price','<',1000000);
                    break;
                case "3":
                    $products->whereBetween('pro_price',[1000000,3000000]);
                    break;
                case "5":
                    $products->whereBetween('pro_price',[3000000,5000000]);
                    break;
                case "7":
                    $products->whereBetween('pro_price',[5000000,7000000]);
                    break;
                case "10":
                    $products->whereBetween('pro_price',[7000000,10000000]);
                    break;
                case "11":
                    $products->where('pro_price','>','10000000');
                    break;
            }

        }
        //sắp xếp theo order by select
        if ($request->orderby){

            $orderBy = $request->orderby;
            switch ($orderBy){
                case "new":
                    $products->orderBy('created_at','DESC');
                    break;
                case "asc":
                    $products->orderBy('pro_price','ASC');
                    break;
                case "desc":
                    $products->orderBy('pro_price','DESC');
                    break;
            }
        }

        $products = $products->paginate(3);
        $productCart = \Cart::content();
        $viewData = [
            'products' => $products,
            'cateProduct'=>$cateProduct,
            'query'=>$request->query(),
            'orderBy'=>$orderBy,
            'productCart'=>$productCart
        ];
        return view('product.index',$viewData);
    }

}
