<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viewer;
use App\Models\Article;
use App\Models\News;


class ArticleController extends Controller
{
    function add_article(Request $request, $news_id){

    $article = Article::create([
        'content' => $request->content,
        'attachment' => $request->attachment,
        'news_id' => $request->news_id,
        'user_id' => auth()->id(),
    ]);

    return response()->json([
        "Article" => $article,
    ]);
}

}
