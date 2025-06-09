<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Request $request)
{
    $query = Post::where('user_id', auth()->id());

    // Si viene una categoría seleccionada, filtramos
    if ($request->has('category_id') && $request->category_id !== null) {
        $query->where('category_id', $request->category_id);
    }

    $posts = $query->get();
    $categories = Category::all(); // para el filtro en la vista

    return view('category.index', compact('posts', 'categories'));
}

    public function create()
{
    $categories = Category::all(); 
    return view('category.create', compact('categories'));
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
