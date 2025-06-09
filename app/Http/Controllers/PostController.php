<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())->get();
        return view('category.index', compact('posts'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'habilitated' => 'required|boolean',
        ]);

        $validated['poster'] = auth()->user()->email;

        Post::create($validated);

        return redirect()->route('category.index');
    }

    public function edit(Post $post)
    {
        return view('category.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'habilitated' => 'required|boolean',
        ]);

        $post->update($validated);

        return redirect()->route('category.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('category.index');
    }
}
