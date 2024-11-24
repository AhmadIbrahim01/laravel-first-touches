<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function allowed_news(){

        $news = News::whereNull('age_restriction')
                    ->orWhere('age_restriction', '<=', auth()->user()->age)
                    ->get();

        return response()->json([
            "Allowed_news" => $news,
        ]);
}

}
