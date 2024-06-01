<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class HomeController extends Controller
{
    public function inicio()
    {
        // Obtén las dos primeras recetas
        $fixedRecipes = Recipe::orderBy('created_at')->take(2)->get();
        // Obtén tres recetas aleatorias
        $randomRecipes = Recipe::inRandomOrder()->take(3)->get();
        // Combina las dos colecciones
        $recipes = $fixedRecipes->concat($randomRecipes);

        return view('inicio', ['recipes' => $recipes]);
    }
}
