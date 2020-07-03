<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticlesRequest;
use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function store(ArticlesRequest $request){
        return Article::create($request->all());
    }

    public function getArticlesById($id){
        return Article::where('shop_id', $id)->get();
    }

    public function deleteById($id){
        $article = Article::find($id);
        $article->delete();
        dd($article);
    }
}
