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

        for($i = 1; $i<=30; $i++){

            $coupon = new Coupon;
            $coupon->title = $faker->text(100);

            $coupon->short_description = $faker->realText(100);
            $coupon->long_description = $faker->paragraph(60);
            $coupon->coupon_code = rand(99999,1000000);
            $coupon->start_date = now();
            $coupon->verified_on = now();
            $coupon->expire_date = now()->addDays(7);
            $coupon->views = $faker->unique()->numberBetween(20,100);

            $coupon->image = "coupon_image.png";
            $coupon->banner_image = "coupon_banner_image.jpg";

            $coupon->redirect_site_name = $faker->name();
            $coupon->redirect_site_url = $faker->url();

            $coupon->store_id = $faker->numberBetween(1,10);
            $coupon->code = $faker->numberBetween(0,1);

            $coupon->save();
        }
    
    }
}
