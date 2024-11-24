<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post("/add",[AdminController::class, "add_admin"]);
Route::post("/news",[AdminController::class, "post"]);
Route::post("/edit/{id}",[AdminController::class, "edit"]);
