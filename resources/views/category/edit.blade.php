@extends('layouts.app')

@section('content')
    <h1>Editar Post</h1>

<form method="POST" action="{{ url('category/update/' . $post->id) }}">
    @csrf
    @method('PUT')

    <label>Título:</label>
    <input type="text" name="title" value="{{ $post->title }}" />

    <label>Contenido:</label>
    <textarea name="content">{{ $post->content }}</textarea>

    <label>Poster:</label>
    <input type="text" name="poster" value="{{ $post->poster }}" />

    <label>Habilitado:</label>
    <input type="checkbox" name="habilitated" {{ $post->habilitated ? 'checked' : '' }} />

    <button type="submit">Guardar</button>
</form>

@endsection