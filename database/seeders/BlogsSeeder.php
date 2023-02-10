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

        $blogs = [
            [
                'parent_id' => 0,
                'is_coupon_site' => 0,
                'sort' => 1,
                'name'=>'Fitness',
                'title'=>'fitness',
                'slug'=> 'more-links',
                'short_description'=> "Short Description",
                'long_description'=> "Long Description",
                'views'=> 100,
                'is_category' => 1,
                'status'=> 1,
            ],            
            [
                'parent_id' => 0,
                'is_coupon_site' => 0,
                'sort' => 2,
                'name'=>'Food',
                'title'=>'food',
                'slug'=> 'more-links',
                'short_description'=> "Short Description",
                'long_description'=> "Long Description",
                'views'=> 100,
                'is_category' => 1,
                'status'=> 1,
            ],           
            [
                'parent_id' => 0,
                'is_coupon_site' => 0,
                'sort' => 3,
                'name'=>'Fashion & Beauty',
                'title'=>'fashion-and-beauty',
                'slug'=> 'more-links',
                'short_description'=> "Short Description",
                'long_description'=> "Long Description",
                'views'=> 100,
                'is_category' => 1,
                'status'=> 1,
            ],
            [
                'parent_id' => 0,
                'is_coupon_site' => 0,
                'sort' => 4,
                'name'=>'Technolgy',
                'title'=>'technolgy',
                'slug'=> 'more-links',
                'short_description'=> "Short Description",
                'long_description'=> "Long Description",
                'views'=> 100,
                'is_category' => 1,
                'status'=> 1,
            ],
            

        ];

        foreach ($blogs as $value) {
            Blog::create($value);
        }

        $faker = \Faker\Factory::create();

        for($i = 1; $i<=15; $i++){

            $blog = new Blog;
            $blog->title = $faker->realText(90);
            $blog->name = $faker->realText(90); // $faker->sentence(6);

            $blog->parent_id = $faker->numberBetween(1,4);

            $blog->reading_time = "5 Minutes, 30 Sec";
            $blog->views = $faker->unique()->numberBetween(20,100);          

            $blog->short_description = $faker->realText(190);
            $blog->long_description = $faker->paragraph(60);
            $blog->blog_image = "blog_image.jpg";
            $blog->save();
        }
    }
}
