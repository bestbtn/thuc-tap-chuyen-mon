<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $productHot = Product::where([
            'pro_hot' => Product::HOT_ON,
            'pro_active'=> Product::STATUS_PUBLIC
        ])->limit(3)->get();
        $productNew = Product::limit(7)->get();
        $articles = Article::limit(5)->get();
        $products = \Cart::content();
        $bestsellers = Product::whereRaw('pro_number_pay > 0 ')->orderBy('pro_number_pay','DESC')->take(5)->get();
        $viewData = [
            'productHot' => $productHot,
            'productNew' => $productNew,
            'articles'  => $articles,
            'products' =>  $products,
            'bestsellers'=>$bestsellers
        ];
        return view('home.index',$viewData);
    }

}
