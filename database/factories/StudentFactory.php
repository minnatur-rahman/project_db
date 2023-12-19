<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'age' => fake()->numberBetween(15,20),
            'email' => fake()->name(),
            'address' => fake()->name(),
            'city' => fake()->name(),
            'phone' => fake()->name(),
            'password' => fake()->name(),

        ];
    }
}
