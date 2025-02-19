<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            ['name' => 'Laptop', 'price' => 599.99, 'category_id' => 1], // Technology
            ['name' => 'Vitamins', 'price' => 15.00, 'category_id' => 2], // Health
            ['name' => 'Notebook', 'price' => 5.00, 'category_id' => 3], // Education
            ['name' => 'TestITEM1', 'price' => 15.00, 'category_id' => 4], // Test1
            ['name' => 'TestITEM2', 'price' => 20.00, 'category_id' => 5], // Test2
        ]);
    }
}
