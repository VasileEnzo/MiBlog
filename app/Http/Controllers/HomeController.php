<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 

class HomeController extends Controller
{
    public function getHome()
    {
        $posts = Post::where('habilitated', 1)->get();
        return view('home', compact('posts'));
    }
}
