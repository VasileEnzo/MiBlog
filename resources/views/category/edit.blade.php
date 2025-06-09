@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto mt-10 bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Editar Post</h1>

        <form method="POST" action="{{ route('category.update', $post->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700 dark:text-gray-300 font-semibold mb-1">Título:</label>
                <input 
                    id="title" 
                    type="text" 
                    name="title" 
                    value="{{ $post->title }}" 
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                    required
                />
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700 dark:text-gray-300 font-semibold mb-1">Contenido:</label>
                <textarea 
                    id="content" 
                    name="content" 
                    rows="5" 
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                    required
                >{{ $post->content }}</textarea>
            </div>

            <div class="mb-4">
                <label for="poster" class="block text-gray-700 dark:text-gray-300 font-semibold mb-1">Poster:</label>
                <input 
                    id="poster" 
                    type="text" 
                    name="poster" 
                    value="{{ $post->poster }}" 
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                    required
                />
            </div>

            <div class="mb-6 flex items-center">
                <input 
                    id="habilitated" 
                    type="checkbox" 
                    name="habilitated" 
                    class="h-5 w-5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" 
                    {{ $post->habilitated ? 'checked' : '' }}
                />
                <label for="habilitated" class="ml-2 block text-gray-900 dark:text-gray-300 font-semibold">
                    Habilitado
                </label>
            </div>

            <button 
                type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-md transition-colors"
            >
                Guardar
            </button>
        </form>
    </div>
@endsection
