<?php

namespace App\Http\Controllers;

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
        $viewData = [
            'productHot' => $productHot,
            'productNew' => $productNew
        ];
        return view('home.index',$viewData);
    }
}
