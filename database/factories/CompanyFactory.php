<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::class,
            'name' => fake()->company(),
            'url' => fake()->domainName(),
            'logo' => 'https://picsum.photos/seed/' . rand(0, 100_000) . '/90',
        ];
    }
}
