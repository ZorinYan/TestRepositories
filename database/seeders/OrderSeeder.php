<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @throws \Exception
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            'count_order' => random_int(1,5),
            'price_order' => random_int(100,500),
            'status' => fake()->randomElement(['Новый', 'Подтверждённый', 'Отменённый']),
            'deviation_reason' => fake()->text(),
            'user_id' => random_int(1,10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
