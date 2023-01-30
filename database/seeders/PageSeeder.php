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
            ],
            [
                'name'=>'About Us',
                'title'=>'About Us',
                'slug'=> 'about-us',
                'short_description'=> "More Links Short Description",
                'long_description'=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            ],
            [
                'name'=>'Privacy Policy',
                'title'=>'Privacy Policy',
                'slug'=> 'privacy-policy',
                'short_description'=> "More Links Short Description",
                'long_description'=> "More Links Long Description",
            ],
            [
                'name'=>'Terms Conditions',
                'title'=>'Terms & Conditions',
                'slug'=> 'terms-conditions',
                'short_description'=> "More Links Short Description",
                'long_description'=> "More Links Long Description",
            ],

        ];

        foreach ($pages as $value) {
            Page::create($value);
        }
    }
}
