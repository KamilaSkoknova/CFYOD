<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
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
            'picture_path' => $this->faker->imageUrl($width = 640, $height = 480) ,
            'available' => $this->faker->sentence(6),
            'more_info' => $this->faker->sentence(8),
            'user_id' => 6,
        ];
    }
}
