<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products_favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontendController extends Controller
{

    public function __construct()
    {
        $categories = Category::all();
        $userWishList  = Products_favorite::count();

        View::share(['categories'=>$categories,'userWishList'=>$userWishList]);



    }
}
