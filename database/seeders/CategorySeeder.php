<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 1; $i<=15; $i++){

            $category = new Category;

            $category->name = $faker->realText(15);
            $category->title = $faker->realText(15);   
            $category->image = "category.png";

            $category->popular = $faker->numberBetween(0,1);
            
            $category->save();
        }
    }
}
