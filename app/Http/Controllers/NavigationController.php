<?php

namespace App\Http\Controllers;

use App\Models\{Post,Tag,User,Category};
use App\Http\Controllers\{PostController,UserController};
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function contact()
    {
        return view('navigation.contact');
    }

    public function about(Post $post)
    {
        return view('navigation.about');
    }

    public function login()
    {
        return view('auth.login');
    }
}
