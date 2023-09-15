<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => "Iphone 13",
            'description' => "Mobile Phone Apple",
            'price' => 980
        ]);

        DB::table('products')->insert([
            'name' => "Iphone 11",
            'description' => "Tablet Apple",
            'price' => 850
        ]);

        DB::table('products')->insert([
            'name' => "PlayStation 5",
            'description' => "Video Console",
            'price' => 540
        ]);
    }
}
