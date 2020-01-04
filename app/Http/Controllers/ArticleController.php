<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends FrontendController
{
    public function getListArticle(){
            $article = Article::where([
                'a_active' => Article::STATUS_PUBLIC
            ])->orderBy('id','DESC')->paginate(4);
            $viewData = [
              'article'=> $article
            ];
            return view('article.index',$viewData);
    }


}
