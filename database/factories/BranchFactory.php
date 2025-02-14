<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branch>
 */
class BranchFactory extends Factory
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
            'name' => fake()->unique()->randomElement([
                'Computer Science',
                'Mechanical Engineering',
                'Electrical Engineering',
                'Civil Engineering',
                'Electronics and Communication',
                'Information Technology'
            ]),
            'discription' => fake()->paragraph(5),
        ];
    }
}
