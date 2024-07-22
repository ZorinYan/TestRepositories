<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [];
        for ($i = 0; $i < 50; $i++) {
            $users[] = [
                DB::table('users')->insert([
                    'name' => fake()->firstName(),
                    'surname' => fake()->lastName(),
                    'patronymic' => fake()->firstName,
                    'login' => fake()->text(),
                    'email' => fake()->unique()->safeEmail(),
                    'password' => Hash::make('password'),
                    'role' => fake()->randomElement(['user', 'admin']),
                ])];
        }

    }
}
