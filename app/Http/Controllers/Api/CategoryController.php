<?php
// app/Http/Controllers/Api/CategoryController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id, $page)
    {
        // Busca la categoría por su ID. Si no se encuentra, se lanza un error 404.
        $category = Category::findOrFail($id);

        // Obtiene las recetas asociadas a la categoría. Selecciona solo los campos 'id', 'name' y 'publication_date'.
        // Pagina los resultados, mostrando 10 recetas por página. El número de página se pasa como parámetro.
        $recipes = $category->recipes()->paginate(10, ['recipes.id', 'name', 'publication_date'], 'page', $page);

        // Devuelve las recetas en formato JSON.
        return response()->json($recipes);
    }
}
