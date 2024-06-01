<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;
use App\Models\Category;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtén todas las categorías
        $categories = Category::all();

        // Genera 100 recetas
        Recipe::factory()->count(100)->create()->each(function ($recipe) use ($categories) {
            // Asigna una categoría aleatoria a cada receta
            $recipe->categories()->attach(
                $categories->random(rand(1, 2))->pluck('id')->toArray()
            );
        });
    }
}
