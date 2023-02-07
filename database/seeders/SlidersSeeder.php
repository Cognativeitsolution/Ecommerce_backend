<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Slider;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 1; $i<=5; $i++){

            $slider = new Slider;
            $slider->title = $faker->sentence(4);
            $slider->description = $faker->sentence(10);
            $slider->is_coupon = random_int(0, 1);
            $slider->url = "#";
            $slider->image = "slider.jpg";
            $slider->save();
        }
    }
}
