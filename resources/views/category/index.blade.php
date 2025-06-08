@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto mt-10 space-y-6">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6 text-center">Lista de Posts</h1>

        @foreach ($posts as $post)
            <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-xl shadow-md">
                <a href="{{ route('category.show', $post->id) }}" class="text-xl font-semibold text-blue-600 dark:text-blue-400 hover:underline">
                    {{ $post->title }}
                </a>

                <p class="text-gray-700 dark:text-gray-300 mt-2">{{ $post->content }}</p>

                <div class="flex justify-between items-center mt-4 text-sm">
                    <a href="{{ route('category.edit', $post->id) }}" class="text-blue-500 hover:underline">Editar</a>

                    <form action="{{ route('category.destroy', $post->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro que querés eliminar este post?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection

