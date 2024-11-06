<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $test_user = User::create([
            'name' => 'Farish',
            'email' => 'farish@example.com',
            'password' => Hash::make('rahasia123'),
        ])->assignRole('maintainer');

        Company::factory()->create(['user_id' => $test_user->id,]);
    }
}
