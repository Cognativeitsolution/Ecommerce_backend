<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Blog;

class BlogsSeeder extends Seeder
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

            $blog = new Blog;
            $blog->title = $faker->text(90);
            $blog->name = $faker->sentence(6);

            $blog->reading_time = "5 Minutes, 30 Sec";
            $blog->views = $faker->unique()->numberBetween(20,100);

            $blog->short_description = $faker->text(190);
            $blog->long_description = $faker->paragraph(60);
            $blog->blog_image = "blog_image.jpg";
            $blog->save();
        }
    }
}
