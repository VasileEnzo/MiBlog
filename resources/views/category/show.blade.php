@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<p>Publicado por: {{ $post->poster }}</p>
<p>Habilitado: {{ $post->habilitated ? 'Sí' : 'No' }}</p>

@endsection
