<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        DB::table('categories')->insert([
            ['name' => 'Technology', 'description' => 'Latest gadgets and software.'],
            ['name' => 'Health', 'description' => 'Tips and products for a healthy life.'],
            ['name' => 'Education', 'description' => 'Resources for students and teachers.'],
            ['name' => 'TestCategory1', 'description' => '111 - This is a description for TestCategory1'],
            ['name' => 'TestCategory2', 'description' => '222 - This is a description for TestCategory2'],
        ]);
    }
}
