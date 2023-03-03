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
                'name'=>'Blog Pages',
                'title'=>'Blog Pages',
                'slug'=> 'blog-pages',
                'short_description'=> "Blog Pages Short Description",
                'long_description'=> "Blog Pages Long Description",
            ],
            [
                'parent_id' => 1,
                'name'=>'About Us',
                'title'=>'About Us',
                'slug'=> 'about-us',
                'type' => 1,
                'short_description'=> "More Links Short Description",
                'long_description'=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            ],
            [
                'parent_id' => 1,
                'name'=>'Privacy Policy',
                'title'=>'Privacy Policy',
                'slug'=> 'privacy-policy',
                'type' => 1,
                'short_description'=> "More Links Short Description",
                'long_description'=> "More Links Long Description",
            ],
            [
                'parent_id' => 1,
                'name'=>'Terms Conditions',
                'title'=>'Terms & Conditions',
                'slug'=> 'terms-conditions',
                'type' => 1,
                'short_description'=> "More Links Short Description",
                'long_description'=> "More Links Long Description",
            ],
            [
                'parent_id' => 2,
                'name'=>'About Us',
                'title'=>'About Us',
                'slug'=> 'about-us',
                'type' => 0,
                'short_description'=> "More Links Short Description",
                'long_description'=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            ],
            [
                'parent_id' => 2,
                'name'=>'Privacy Policy',
                'title'=>'Privacy Policy',
                'slug'=> 'privacy-policy',
                'type' => 0,
                'short_description'=> "More Links Short Description",
                'long_description'=> "More Links Long Description",
            ],
            [
                'parent_id' => 2,
                'name'=>'Terms Conditions',
                'title'=>'Terms & Conditions',
                'slug'=> 'terms-conditions',
                'type' => 0,
                'short_description'=> "More Links Short Description",
                'long_description'=> "More Links Long Description",
            ],

        ];

        foreach ($pages as $value) {
            Page::create($value);
        }
    }
}
