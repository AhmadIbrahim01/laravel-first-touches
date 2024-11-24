<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viewer;
use App\Models\Article;
use App\Models\News;
use App\Models\NewsRequest;

class NewsRequestsController extends Controller
{
    function request_news(Request $request){
    $request = NewsRequest::create([
        'title' => $request->title,
        'description' => $request->description,
        'user_id' => auth()->id(),
    ]);

    return response()->json([
        "Request_news" => $request,
    ]);
}

}
