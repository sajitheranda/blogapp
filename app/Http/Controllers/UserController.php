<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        


        if (Auth::user()->role === 'admin') {
            return view('admin.newpost');
        } elseif(Auth::user()->role === 'user') {
            return view('user.newpost');
        }else{
            return view('post.newpost');
        }
    }
}
