@extends('layouts.app')

@section('content')

    <div class="max-w-4xl mx-auto mt-10 space-y-6">
    <div class="bg-white dark:bg-gray-900 p-6 rounded-xl shadow-md text-white align-center">
        <h1 class="text-3xl font-bold mb-4 text-center">¡Bienvenidos a nuestro rincón encantado del cine!</h1>
        <p>
        Este blog está dedicado al mágico universo de <strong>Studio Ghibli</strong>, un lugar donde los sueños se dibujan a mano y las emociones cobran vida en cada fotograma. Si sos amante de historias profundas, personajes entrañables y mundos que combinan fantasía con una sensibilidad única, estás en el sitio correcto.
        </p>
        <p>
        Aquí encontrarás reseñas, análisis, curiosidades y reflexiones sobre las películas que marcaron generaciones: desde los clásicos como <em>Mi vecino Totoro</em> y <em>La princesa Mononoke</em>, hasta joyas menos conocidas que merecen ser redescubiertas. Nuestro objetivo es revivir esas sensaciones que solo Ghibli sabe despertar y compartirlas con otros fanáticos.
        </p>
        <p>
        Este espacio está pensado para que podamos conversar, emocionarnos y viajar juntos por los paisajes de Hayao Miyazaki, Isao Takahata y otros grandes creadores. Gracias por estar acá. ¡Comencemos esta aventura con el corazón abierto y los ojos bien atentos!
        </p>
    </div>
        <div class="all-center mt-10 text-white">
                <h1 class="text-3xl font-bold mb-4 text-center text-white">¡Nuestros Post!</h1>
           @foreach ($posts as $post)
            @if ($post->habilitated == 1)
                <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-xl shadow-md">
                    <a href="{{ route('category.show', $post->id) }}" class="text-xl font-semibold text-blue-600 dark:text-blue-400 hover:underline">
                        {{ $post->title }}
                    </a>

                    <p class="text-gray-700 dark:text-gray-300 mt-2">{!! nl2br(e(Str::limit($post->content, 250))) !!}</p>
                    <div class="flex justify-between items-center mt-4 text-sm text-gray-500">
                        <span>Publicado por: {{ $post->user->name ?? 'Anónimo' }}</span>

                        <span>{{ $post->created_at->format('d/m/Y') }}</span>
                    </div>
                </div>
            @endif
@endforeach
        </div>

</div>


@endsection
