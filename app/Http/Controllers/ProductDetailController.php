<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rating;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductDetailController extends FrontendController
{
    public function getDetailProduct(Request $request){
        $url = $request->segment(2);
        $url = preg_split('/(-)/i',$url);
        if ($id = array_pop($url)){
            $productDetail = Product::where('pro_active',Product::STATUS_PUBLIC)->find($id);
            $ratings = Rating::with('user')->where('ra_product_id',$id)->paginate(5);
            //$user = User::leftJoin('ratings','users.id','=','ratings.ra_user_id')->get();
            //dd($ratings->all());
            $viewData = [
                'productDetail' => $productDetail,
                'ratings' => $ratings,
            ];
            return view('product.detail',$viewData);
        }
        return redirect()->back();
    }
    public function saveRating(Request $request,$id){
        $rating = new Rating();
        $url = $request->segment(2);
        $url = preg_split('/(-)/i',$url);
        $id = array_pop($url);
        $rating->ra_product_id = $id;
        $rating->ra_number = $request->rating;
        $rating->ra_content = $request->contentt;
        $rating->ra_user_id = get_data_user('web');;
        $rating->created_at = Carbon::now();
        $rating->updated_at = Carbon::now();
        $rating->save();

        $product = Product::find($id);
        $product->pro_total_rating +=1;
        $product->pro_total_number_rating += $request->rating;
        $product->save();

        return redirect()->back();
    }
    public function viewProduct(Request $request,$id){
        if($request->ajax()){
            $productDetail = Product::find($id);
            $html = view('quickview',compact('productDetail'))->render();
            return \response()->json($html);
        }

    }

}
