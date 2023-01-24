<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Coupon;

class CouponSeeder extends Seeder
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

            $coupon = new Coupon;
            $coupon->title = $faker->realText(40);

            $coupon->short_description = $faker->realText(70);
            $coupon->long_description = $faker->paragraph(10);
            $coupon->coupon_code = rand(99999,1000000);
            $coupon->start_date = now();
            $coupon->verified_on = now();
            $coupon->expire_date = now()->addDays(7);
            $coupon->views = $faker->unique()->numberBetween(20,1000);

            $coupon->image = "coupon_image.png";
            $coupon->banner_image = "coupon_banner_image.jpg";

            $coupon->redirect_site_name = $faker->name();
            $coupon->redirect_site_url = $faker->url(); // "https://www.google.com";

            $coupon->store_id = $faker->numberBetween(1,20);
            $coupon->code = $faker->numberBetween(0,1);
            $coupon->featured = $faker->numberBetween(0,1);
            $coupon->latest = $faker->numberBetween(0,1);

            $coupon->save();
        }
    
    }
}
