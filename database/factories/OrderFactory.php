<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_title' => $this->faker->sentence(6),
            'details_location' => $this->faker->streetAddress(),
            'details_time' => $this->faker->iso8601(),
            'price' => $this->faker->randomDigit(),
            'details_concrete' => $this->faker->text(),
            'user_id' => 6,
        ];
    }
}
