<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class Dashboardcontroller extends Controller
{
    //
    public function index(){
        return view("admin.dashboard");
    }

    public function allpost(){

        $posts= Post::all();
        return view('admin.allpost',compact('posts')) ;

    }
}
