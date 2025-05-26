@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear nuevo Post</h1>

    <form action="{{ route('category.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="poster" class="form-label">Autor (email)</label>
            <input type="email" name="poster" id="poster" class="form-control" required>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="habilitated" id="habilitated" class="form-check-input">
            <label for="habilitated" class="form-check-label">Habilitado</label>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenido</label>
            <textarea name="content" id="content" rows="5" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Crear Post</button>
    </form>
</div>
@endsection
