<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['$50,000', '$60,000', '$80,000']),
            'location' => fake()->city . ', ' . fake()->country,
            'type' => fake()->randomElement(['remote', 'Full-Time', 'Part-Time']),
            'url' => fake()->url,
            'featured' => false,
        ];
    }
}
