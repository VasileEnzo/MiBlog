@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-md text-gray-900 dark:text-gray-100">

    <div id="view-mode" class="bg-white overflow-hidden shadow rounded-lg border">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Perfil de Usuario
        </h3>
         <img class="mx-auto rounded-full h-16 w-16" src="{{ asset('images/noface.png') }}" alt="author avatar">
    </div>
    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
        <dl class="sm:divide-y sm:divide-gray-200">
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Nombre
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ auth()->user()->name }}
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Email
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ auth()->user()->email}}
                </dd>
            </div>
                            <div class="flex justify-center mt-5 space-x-5">
                        <a href="https://github.com/VasileEnzo/MiBlog" target="_blank" rel="noopener noreferrer"
                        class="inline-block text-gray-400"><span class="sr-only">GitHub</span><svg stroke="currentColor"
                            fill="currentColor" stroke-width="0" viewBox="0 0 496 512"
                            class="w-6 h-6 text-gray-400 hover:text-gray-100" height="3em" width="3em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                            </path>
                        </svg></a>
                </div>
        </dl>
    </div>
</div>
        <div class="text-center pt-4">
            <button 
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition"
                onclick="toggleEdit(true)">
                Editar perfil
            </button>
        </div>
    <div id="edit-mode" class="hidden">
        <form method="POST" action="{{ route('profile.update') }}" class="space-y-5">
            @csrf
            @method('patch')

            <div>
                <label class="block mb-1 font-semibold">Nombre</label>
                <input 
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                    type="text" 
                    name="name" 
                    value="{{ old('name', auth()->user()->name) }}" 
                    required
                >
            </div>

            <div>
                <label class="block mb-1 font-semibold">Email</label>
                <input 
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                    type="email" 
                    name="email" 
                    value="{{ old('email', auth()->user()->email) }}" 
                    required
                >
            </div>

            <div>
                <label class="block mb-1 font-semibold">Nueva Contraseña</label>
                <input 
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                    type="password" 
                    name="password"
                >
            </div>

            <div>
                <label class="block mb-1 font-semibold">Confirmar Contraseña</label>
                <input 
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" 
                    type="password" 
                    name="password_confirmation"
                >
            </div>

            <div class="flex gap-4">
                <button 
                    type="submit" 
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition"
                >
                    Guardar
                </button>
                <button 
                    type="button" 
                    class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded-md transition"
                    onclick="toggleEdit(false)"
                >
                    Cancelar
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function toggleEdit(showEdit) {
    document.getElementById('view-mode').style.display = showEdit ? 'none' : 'block';
    document.getElementById('edit-mode').classList.toggle('hidden', !showEdit);
}
</script>
@endsection
