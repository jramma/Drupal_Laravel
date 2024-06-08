<?php
// app/Http/Controllers/Api/RecipeController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class ApiRecipeController extends Controller
{
    public function index($page)
    {
        $recipes = Recipe::paginate(10, ['id', 'name', 'publication_date'], 'page', $page);
        return response()->json($recipes);
    }


    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        return response()->json($recipe);
    }
}
