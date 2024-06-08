<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class RecipeController extends Controller
{
    // public function index()
    // {
    //     $recipes = Recipe::all();

    //     return response()->json($recipes);
    // }
    // public function show($id)
    // {
    //     $recipe = Recipe::find($id);

    //     if ($recipe) {
    //         return response()->json($recipe);
    //     } else {
    //         return response()->json(['error' => 'Recipe not found'], 404);
    //     }
    // }
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }
}
