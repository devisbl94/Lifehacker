<?php

use App\Task;
use App\Category;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::truncate();
        $maxCategories = Category::count();

        $faker = Faker::create();

        foreach(range(1, 120) as $index) {

            $year = 2018;
            $month = rand(1, 12);
            $day = rand(1, 28);

            $date = Carbon::create($year,$month ,$day);

            Task::create([
                'title'         => $faker->sentence(3),
                'content'   	=> $faker->sentence(rand(20, 50)),
                'deadline'  	=> $date->format('Y-m-d'),
                'category_id'	=> rand(1, $maxCategories),
                'user_id' 		=> '1'
            ]);
        }
    }
}
