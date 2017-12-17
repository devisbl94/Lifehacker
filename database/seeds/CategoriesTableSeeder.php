<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        Category::create(['name' => "Normal"]);
        Category::create(['name' => "Meh"]);
        Category::create(['name' => "Unimportant"]);
        Category::create(['name' => "Important"]);
        Category::create(['name' => "Urgent"]);
    }
}
