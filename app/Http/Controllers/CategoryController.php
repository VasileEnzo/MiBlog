<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getIndex(Request $request)
{
    $query = Post::with('category')->where('user_id', auth()->id());

    if ($request->has('category_id') && $request->category_id != '') {
        $query->where('category_id', $request->category_id);
    }

    $posts = $query->get();
    $categories = Category::all();

    return view('category.index', compact('posts', 'categories'));
}
public function update(Request $request, Post $post)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'poster' => 'required|string|email',
        'content' => 'required|string',
        'habilitated' => 'nullable'
    ]);

    $post->update([
        'title' => $request->input('title'),
        'poster' => $request->input('poster'),
        'content' => $request->input('content'),
        'habilitated' => $request->input('habilitated') == 1,

    ]);

    return redirect()->route('category.index');
}

    public function show(Post $post)
{
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
public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'poster' => 'required|string|email',
        'content' => 'required|string',
        'habilitated' => 'nullable',
        'category_id' => 'required|exists:categories,id', 
    ]);

    Post::create([
        'title' => $request->input('title'),
        'poster' => $request->input('poster'),
        'content' => $request->input('content'),
        'habilitated' => $request->has('habilitated'),
        'user_id' => auth()->id(),
        'category_id' => $request->input('category_id'), 
    ]);

    return redirect()->route('category.index');
}

}
