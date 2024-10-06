<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'salary' => fake()->randomElement(["$10,000 USD", "$15,000 USD", "$20,000 USD", "$25,000 USD", "$30,000 USD", "$35,000 USD", "$40,000 USD", "$45,000 USD", "$50,000 USD", "$55,000 USD", "$60,000 USD", "$65,000 USD", "$70,000 USD", "$75,000 USD", "$80,000 USD", "$85,000 USD", "$90,000 USD", "$95,000 USD", "$100,000 USD", "$105,000 USD", "$110,000 USD", "$115,000 USD", "$120,000 USD"]),
            'location' => 'Remote',
            'schedule' => 'Full Time',
            'url' => fake()->url,
            'featured' => false
            ];
    }
}
