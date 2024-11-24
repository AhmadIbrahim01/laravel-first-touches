<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post("/add",[AdminController::class, "add_admin"]);
Route::post("/news",[AdminController::class, "post_news"]);
Route::post("/edit/{id}",[AdminController::class, "edit_news"]);
Route::post("/delete/{id}",[AdminController::class, "delete_news"]);
Route::get('/news', [NewsController::class, 'allowed_news']);
Route::post('/news/{news_id}/articles', [ArticleController::class, 'add_article']);
Route::post('/news_requests', [NewsRequestController::class, 'request_news']);
