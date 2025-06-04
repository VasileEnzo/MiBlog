@if (Route::has('login'))
    <div>
        @auth
            <a href="{{ url('/dashboard') }}">Ir al Dashboard</a>
        @else
            <a href="{{ route('login') }}">Iniciar sesión</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Registrarse</a>
            @endif
        @endauth
    </div>
@endif
