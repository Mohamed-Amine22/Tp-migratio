<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class filmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => fake()->name(),
            'pays' => fake()->country(),
            
        ];
    }
}
