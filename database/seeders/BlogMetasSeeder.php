<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\BlogMetas;

class BlogMetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=1; $i<=10; $i++){
            $meta = new BlogMetas();
            $meta->blog_id = $i;
            $meta->meta_keywords = $faker->text(150);
            $meta->meta_description = $faker->text(150);
            $meta->save();
        }
    }
}
