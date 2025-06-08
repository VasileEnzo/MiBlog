@extends('layouts.app')

@section('content')
    <div class="flex justify-center mt-10">
        <div class="bg-white dark:bg-gray-800 text-gray-900 dark:text-white rounded-2xl shadow-lg max-w-md w-full p-6">
            <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>

            <p class="text-base mb-4 leading-relaxed">{{ $post->content }}</p>

            <div class="border-t border-gray-300 dark:border-gray-700 pt-4 text-sm space-y-1">
                <p><span class="font-semibold">Publicado por:</span> {{ $post->poster }}</p>
                <p><span class="font-semibold">Habilitado:</span> {{ $post->habilitated ? 'Sí' : 'No' }}</p>
            </div>
        </div>
    </div>
@endsection

