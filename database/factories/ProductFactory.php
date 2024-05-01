<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => 1,
            'vendor_id' => 1,
            'title' => fake()->title(),
            'description' => fake()->text(),
            'attributes' => '1 Vinyl',
            'detail' => fake()->text(),
            'image' => fake()->image(),
            'price' => fake()->randomFloat(2, 0, 1000)
        ];
    }
}
