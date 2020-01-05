<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminRatingController extends Controller
{

    public function index()
    {
        $ratings = Rating::with('user','product')->paginate(10);
        return view('admin::rating.index',compact('ratings'));
    }
    public function action($action,$id){
        if (isset($action)){
            $rating = Rating::find($id);
            switch ($action)
            {
                case 'delete':
                    $rating->delete();
                    break;
            }
        }
        return redirect()->back();
    }


}
