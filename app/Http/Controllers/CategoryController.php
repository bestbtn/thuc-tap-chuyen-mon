<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends FrontendController
{
    public function getListProduct(Request $request){
        $url = $request->segment(2);
        $url = preg_split('/(-)/i',$url);
        if ($id = array_pop($url)){
            $products = Product::where([
                'pro_category_id' => $id,
                'pro_active'=> Product::STATUS_PUBLIC
            ])->orderBy('id','DESC')->paginate(5);
            $count = Product::where([
                'pro_category_id' => $id,
                'pro_active'=> Product::STATUS_PUBLIC
            ])->get()->count();
            $viewData = [
                'products' => $products,
                'count'    => $count
            ];
            return view('product.index',$viewData);
        }
        return redirect()->back();
    }

}
