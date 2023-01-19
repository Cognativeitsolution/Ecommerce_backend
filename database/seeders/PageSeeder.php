<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'name'=>'More Links',
                'title'=>'More Links',
                'slug'=> 'more-links',
                'short_description'=> "More Links Short Description",
                'long_description'=> "More Links Long Description",
            ]

        ];

        foreach ($pages as $key => $value) {
            Page::create($value);
        }

        $faker = \Faker\Factory::create();
        for($i = 1; $i<=3; $i++){

            $page = new Page;
            $page->parent_id = 1 ;
            $page->name = $faker->name();
            $page->title = $faker->words(4, true);
            $page->short_description = $faker->text(80);
            $page->long_description = $faker->text(1000);
            $page->save();
        }

    }
}
