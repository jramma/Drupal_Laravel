<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('5 recetas:') }}
        </h2>
    </x-slot>
    <div class="w-full flex justify-center bg-gray-100 dark:bg-gray-900 py-20">
        <div class="container flex flex-wrap gap-6 items-center justify-center">
            @foreach ($recipes as $recipe)
                <div class="group bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 w-full sm:w-1/2 lg:w-1/3 xl:w-1/4 transform transition-transform duration-500 hover:scale-105 hover:rotate-3">
                    <a href="{{ route('recipes.show', $recipe) }}" class="block">
                        <h3 class="text-2xl font-bold mb-2 text-gray-800 dark:text-white group-hover:text-blue-500">
                            {{ $recipe->name }}
                        </h3>
                        <img class="w-full h-48 object-cover rounded-lg mb-4 group-hover:opacity-75 transition-opacity duration-500" src="{{ $recipe->image }}"
                            alt="{{ $recipe->name }}">
                    </a>
                    <div class="mb-4">
                        <p class="text-gray-600 dark:text-gray-400 group-hover:text-blue-500 transition-colors duration-500">
                            <span class="font-semibold">Dificultad:</span> {{ ucfirst($recipe->difficulty) }}
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 group-hover:text-blue-500 transition-colors duration-500">
                            <span class="font-semibold">Categoría:</span>
                            {{ $recipe->category ? $recipe->category->name : 'Sin categoría' }}
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 group-hover:text-blue-500 transition-colors duration-500">
                            <span class="font-semibold">Publicado:</span> {{ $recipe->created_at->format('d/m/Y') }}
                        </p>
                    </div>
                    <a href="{{ route('recipes.show', $recipe) }}"
                        class="text-blue-500 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-600">
                        Ver receta
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</x-app-layout>
