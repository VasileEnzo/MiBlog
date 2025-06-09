@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto mt-10 space-y-6">

        <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6 text-center">Lista de Posts</h1>

        {{-- Filtro de Categorías --}}
        <form method="GET" action="{{ route('category.index') }}" class="mb-6">
            <label for="category_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Filtrar por categoría:</label>
            <select name="category_id" id="category_id" onchange="this.form.submit()"
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-white">
                <option value="">Todas las categorías</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </form>

        {{-- Lista de Posts --}}
        @foreach ($posts as $post)
            <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-xl shadow-md">
                <a href="{{ route('category.show', $post->id) }}" class="text-xl font-semibold text-blue-600 dark:text-blue-400 hover:underline">
                    {{ $post->title }}
                </a>

                {{-- Categoría del post --}}
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                    Categoría: {{ $post->category?->name ?? 'Sin categoría' }}
                </p>

                <p class="text-gray-700 dark:text-gray-300 mt-2">{!! nl2br(e(Str::limit($post->content, 150))) !!}</p>

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
