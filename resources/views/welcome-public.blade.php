@extends('layouts.app')

@section('content')
<div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-8 text-center">
    <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Bienvenidos a <span class="text-blue-500">No Face</span></h1>
    <p class="text-gray-700 dark:text-gray-300 text-lg mb-6">
        En este blog vas a poder crear posts, compartir reseñas sobre las películas del Studio Ghibli,
        y conectar con otros fanáticos del estudio. ¡Explorá tu imaginación con nosotros!
    </p>
                    <div class="p-6 text-gray-900 dark:text-gray-100 space-y-4">
                    <p>¡Hola y gracias por visitar el blog! Este espacio está pensado para todos los amantes de las historias mágicas, los mundos soñados y la sensibilidad única de <strong>Studio Ghibli</strong>.</p>

                    <p>Aquí vas a poder <strong>crear tus propios posts</strong>, compartir pensamientos, y dejar tus <strong>reseñas</strong> sobre las películas que marcaron tu infancia (¡o que acabás de descubrir!).</p>

                    <p>Desde <em>Mi vecino Totoro</em> hasta <em>El viaje de Chihiro</em>, este sitio es para que vos también seas parte del viaje.  
                    ✨ <strong>Creá, leé, comentá... y dejate llevar por la magia.</strong></p>
                </div>
    <div class="flex justify-center space-x-4">
        <a href="{{ route('login') }}" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Iniciar sesión</a>
        <a href="{{ route('register') }}" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Registrarse</a>
    </div>
</div>
@endsection
