@extends('layouts.app')

@section('content')
    <h1>Lista de Posts</h1>

    @foreach ($posts as $post)
        <div style="border: 1px solid #ccc; padding: 1rem; margin-bottom: 1rem;">
          <a href="{{ route('category.show', $post->id) }}">{{ $post->title }}</a>

            <p>{{ $post->content }}</p>
            

            
            <a href="{{ route('category.edit', $post->id) }}">Editar</a>

            <form action="{{ route('category.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('¿Estás seguro que querés eliminar este post?')">Eliminar</button>
            </form>
        </div>
    @endforeach
@endsection
