<?php

namespace Database\Factories;

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
            'title' => $this->faker->sentence(6),
            'slug' => $this->faker->word(6),
            'image_path' => $this->faker->imageUrl($width = 640, $height = 480) ,
            'extract' => $this->faker->paragraph(),
            'text' => $this->faker->paragraph(5),
            'category_taste' => 'sour',
            'category_type' => 'dinner',
            'user_id' => 1,
        ];
    }
}
