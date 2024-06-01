<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'publication_date' => $this->faker->date,
            'difficulty' => $this->faker->randomElement(['bajo', 'medio', 'alto']),
            'category_id' => Category::factory(), // Crea una categoría relacionada
            'preparation_time' => $this->faker->numberBetween(10, 120),
            'ingredients' => $this->faker->sentence,
            'author' => $this->faker->name,
            'instructions' => $this->faker->paragraph,
            'image_path' => $this->faker->imageUrl(),
        ];
    }
}
