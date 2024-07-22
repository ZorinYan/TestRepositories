<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BasketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('baskets')->insert([
            'count_basket' => random_int(1,5),
            'price_basket' => random_int(100,500),
            'user_id' => random_int(1,10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
