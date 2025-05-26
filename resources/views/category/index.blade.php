@extends('layouts.app')

@section('content')
    <h1>Lista de Posts</h1>

@foreach ($posts as $post)
    <div>
        <h2><a href="{{ url('category/show/' . $post->id) }}">{{ $post->title }}</a></h2>
        <p>{{ $post->content }}</p>
    </div>
@endforeach
@endsection
