<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'price' => fake()->numberBetween(100,100000),
            'description' => fake()->paragraph,
            'tags' => "ecommerce,laptops,mobile",
            'image_url' => "https://picsum.photos/400/400?random=" . time(),
            'is_active' => fake()->boolean,

        ];
    }
}

