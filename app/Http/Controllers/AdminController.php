<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;


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
}
