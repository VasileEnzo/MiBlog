@extends('layouts.app')

@section('content')
<div class="max-w-sm mx-auto p-6 dark:bg-gray-800 rounded-2xl shadow-md mt-10 text-white">
    <h1 class="text-2xl font-bold mb-6 text-center">Crear nuevo Post</h1>

    <form action="{{ route('category.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium text-white-700 mb-1">Título</label>
            <input type="text" name="title" id="title" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label for="poster" class="block text-sm font-medium text-white-700 mb-1">Autor (email)</label>
            <input type="email" name="poster" id="poster" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex items-center">
            <input type="checkbox" name="habilitated" id="habilitated"
                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-white-300 rounded">
            <label for="habilitated" class="ml-2 block text-sm text-white-700">Habilitado</label>
        </div>

        <div>
            <label for="content" class="block text-sm font-medium text-white-700 mb-1">Contenido</label>
            <textarea name="content" id="content" rows="5" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>

        <div>
            <button type="submit"
                class="w-full py-3 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold">
                Crear Post
            </button>
        </div>
    </form>
</div>

@endsection
