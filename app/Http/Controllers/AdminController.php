<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\News;


class AdminController extends Controller
{



    function add_admin(Request $request){
        $admin = Admin::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
        ]);

        return response()->json([
            "New_admin" => $admin,
        ]);
    }

    function post_news(Request $request){

        $news = News::create([
            'title' => $request->title,
            'content' => $request->content,
            'attachment' => $request->attachment,
            'age_restriction' => $request->age_restriction,
            'admin_id' => 1,
        ]);
        return response()->json([
            "New_news" => $news,
        ]);
}
    function edit_news(Request $request){
        $news = News::find($request->id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'attachment' => $request->attachment,
            'age_restriction' => $request->age_restriction,
            'admin_id' => 1,
        ]);
        return response()->json([
            "Updated_news" => $news,
        ]);
    }
    function delete_news($id){
        $news = News::find($id)->delete();

        return response()->json([
            "Deleted_news" => $news,
        ]);
    }
}
