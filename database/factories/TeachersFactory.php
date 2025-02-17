<?php

namespace Database\Factories;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\teachers>
 */
class TeachersFactory extends Factory
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
            'subject' => fake()->randomElement([
                'Calculus',
                'Physics',
                'Python',
                'Data Structures',
                'Computer Networks',
                'Technical Drawing',
                'Sustainable Development',
                'Statics and Dynamics',
                'Automation',
                'Circuit Theory',
                'Discrete Mathematics',
                'Probability and Statistics'

            ]),
            'bio' => fake()->realText(500),
            'branch_id' => Branch::inRandomOrder()->first()->id,
        ];
    }
}
