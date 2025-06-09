<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
use App\Models\Category;

class HomeController extends Controller
{
    public function getHome(Request $request)
{
    $query = Post::with(['user', 'category'])->where('habilitated', true);

    if ($request->filled('category_id')) {
        $query->where('category_id', $request->category_id);
    }

    $posts = $query->latest()->take(3)->get();
    $categories = \App\Models\Category::all();

    return view('home', compact('posts', 'categories'));
}
}

