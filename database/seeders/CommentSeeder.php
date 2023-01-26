<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Comment;
use App\Models\Blog;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 1; $i<=100; $i++){

            $comment = new Comment;

            $comment->blog_id = Blog::all()->random()->id;
            $comment->name = $faker->name();
            $comment->email = $faker->email();
            $comment->description = $faker->realText(150);

            $comment->save();
        }
    }
}
