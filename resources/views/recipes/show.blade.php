<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($recipe->name) }}
        </h2>
    </x-slot>
        <div class="container items-center justify-center flex flex-col py-20">
            <div>
                <img class="w-full h-48 object-cover rounded-lg mb-4"  src="{{ $recipe->image_path}}"
                    alt="{{ $recipe->name }}">
            </div>
            <p class="text-gray-600 dark:text-yellow-400 mb-4">
                <span class="font-semibold">Dificultad:</span> {{ ucfirst($recipe->difficulty) }}
            </p>

            <p class="text-gray-600 dark:text-yellow-400 mb-4">
                <span class="font-semibold">Tiempo de preparación:</span> {{ $recipe->preparation_time }} minutos
            </p>

            <p class="text-gray-600 dark:text-yellow-400 mb-4">
                <span class="font-semibold">Ingredientes:</span> {{ $recipe->ingredients }}
            </p>

            <p class="text-gray-600 dark:text-yellow-400 mb-4">
                <span class="font-semibold">Autor:</span> {{ $recipe->author }}
            </p>

            <p class="text-gray-600 dark:text-yellow-400 mb-4">
                <span class="font-semibold">Instrucciones:</span> {{ $recipe->instructions }}
            </p>

            <p class="text-gray-600 dark:text-yellow-400 mb-4">
                <span class="font-semibold">Publicado:</span> {{ \Carbon\Carbon::parse($recipe->publication_date)->format('d/m/Y') }}
            </p>

            <a href="{{ route('inicio') }}"
                class="text-orange-500 hover:text-orange-700 dark:text-orange-400 dark:hover:text-orange-600">
                Volver a las recetas
            </a>
        </div>
    </x-app-layout>
