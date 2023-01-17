<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\PageMetas;

class PageMetasSeeder extends Seeder
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
            $meta = new PageMetas();
            $meta->page_id = $i;
            $meta->meta_keywords = $faker->text(150);
            $meta->meta_description = $faker->text(150);
            $meta->save();
        }
    }
}
