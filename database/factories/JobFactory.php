<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Region;
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
            'company_id' => Company::factory(),
            'region_id' => Region::factory(),
            'title' => fake()->jobTitle(),
            'desc' => fake()->realText(500),
            'salary' => fake()->randomElement([50_000, 90_000, 120_000]),
            'schedule' => fake()->randomElement(['Full-time', 'Part-time']),
            'expire' => fake()->date(),
            'featured?' => false,
        ];
    }
}
