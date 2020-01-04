<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleDetailController extends Controller
{
    public function getDetailArticle(Request $request){
        $url = $request->segment(2);
        $url = preg_split('/(-)/i',$url);
        if ($id = array_pop($url)){
            $articleDetail = Article::where('a_active',Article::STATUS_PUBLIC)->find($id);
            $viewData = [
                'articleDetail' => $articleDetail
            ];
            return view('article.detail',$viewData);
        }
        return redirect()->back();
    }
}
