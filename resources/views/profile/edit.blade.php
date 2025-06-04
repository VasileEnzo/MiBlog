@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mi Perfil</h1>

    <div id="view-mode">
        <p><strong>Nombre:</strong> {{ auth()->user()->name }}</p>
        <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
        <button class="btn btn-secondary" onclick="toggleEdit(true)">Editar</button>
    </div>

    <div id="edit-mode" style="display: none;">
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')

            <div class="mb-3">
                <label>Nombre</label>
                <input class="form-control" type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input class="form-control" type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required>
            </div>

            <div class="mb-3">
                <label>Nueva Contraseña</label>
                <input class="form-control" type="password" name="password">
            </div>

            <div class="mb-3">
                <label>Confirmar Contraseña</label>
                <input class="form-control" type="password" name="password_confirmation">
            </div>

            <button class="btn btn-primary" type="submit">Guardar</button>
            <button type="button" class="btn btn-secondary" onclick="toggleEdit(false)">Cancelar</button>
        </form>
    </div>
</div>

<script>
function toggleEdit(showEdit) {
    document.getElementById('view-mode').style.display = showEdit ? 'none' : 'block';
    document.getElementById('edit-mode').style.display = showEdit ? 'block' : 'none';
}
</script>
@endsection
