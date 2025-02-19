<?php

namespace Database\Factories;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
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
            'name' => fake()->name,
            'class' => fake()->numberBetween(1, 10),
            'bio' => fake()->realText(500),
            'mark' => fake()->numberBetween(1, 100),
            'branch_id' => Branch::inRandomOrder()->first()->id,
            'status' => fake()->randomElement(['active', 'inactive']),
        ];
    }
}
