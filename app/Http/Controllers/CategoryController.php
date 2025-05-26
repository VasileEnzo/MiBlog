<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class CategoryController extends Controller
{
    public function getIndex()
{
    $posts = Post::all(); 
    return view('category.index', ['posts' => $posts]); 
}

    public function getShow($id)
{
    $post = Post::findOrFail($id); 
    return view('category.show', ['post' => $post]); 
}

    public function getCreate()
    {
        
        return view('category.create'); 
    }

    public function getEdit($id)
{
    $post = Post::findOrFail($id);
    return view('category.edit', ['post' => $post]);

}

public function postStore(Request $request)
{
    $post = new Post;
    $post->title = $request->title;
    $post->poster = $request->poster;
    $post->habilitated = $request->has('habilitated');
    $post->content = $request->content;
    $post->save();

    return redirect('/');
}
}
