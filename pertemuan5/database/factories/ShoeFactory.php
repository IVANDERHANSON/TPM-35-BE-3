<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shoe>
 */
class ShoeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => fake()->company(),
            'Size' => random_int(35, 45), // jadi ukuran sepatunya diantara 35-45
            'Color' => fake()->firstName(),
            'Image' => fake()->imageUrl(),
            'CategoryId' => random_int(1, 2)
        ];
    }
}
