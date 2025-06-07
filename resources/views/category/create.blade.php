@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto  bg-gray-100 dark:bg-gray-900  rounded-lg p-6 ">
    <h1 class="text-2xl font-semibold mb-6 text-center text-white">Crear nuevo Post</h1>

    <form action="{{ route('category.store') }}" method="POST" class="max-w-xl mx-auto p-6 bg-white rounded-2xl shadow-lg mt-10">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label for="poster" class="block text-sm font-medium text-gray-700">Autor (email)</label>
            <input type="email" name="poster" id="poster" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div class="flex items-center">
            <input type="checkbox" name="habilitated" id="habilitated" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="habilitated" class="ml-2 block text-sm text-gray-700">Habilitado</label>
        </div>

        <div>
            <label for="content" class="block text-sm font-medium text-gray-700">Contenido</label>
            <textarea name="content" id="content" rows="5" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" required></textarea>
        </div>

        <div class="text-right">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">Crear Post</button>
        </div>
    </form>
</div>
@endsection