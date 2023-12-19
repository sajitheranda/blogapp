<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    //
    public function index(){
        $posts= Post::all();


        if (!Auth::check()) {
            return view("welcome",compact("posts"));
        } elseif (Auth::user()->role === 'admin') {
            return view("admin.welcome",compact("posts"));
        } elseif(Auth::user()->role === 'user') {
            return view("user.welcome",compact("posts"));
        }else{
            return back();
        }
    }
}
