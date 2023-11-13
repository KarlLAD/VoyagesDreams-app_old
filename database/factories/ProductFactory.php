<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
            //
            // 'name' =>$this->faker->sentence(3),
            // 'category_id' =>$this->faker->name(),
            'category_ID' => mt_rand(0, 11),
            'name' =>  fake()->name(),
            'description' =>  fake()->text(),
            'price' => mt_rand(10, 50000),

        ];
    }
}
