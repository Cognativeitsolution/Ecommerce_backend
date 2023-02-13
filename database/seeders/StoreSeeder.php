<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Store;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 1; $i<=20; $i++){

            $store = new Store;

            $store->uuid = rand(10000,9999999);
            $store->name = $faker->realText(30);
            $store->title = $faker->realText(50);            
            $store->short_description = $faker->text(100);
            $store->long_description = $faker->paragraph(18);
            $store->image = "store_image.png";
            // $store->banner_image = "banner_image.jpg";
            $store->type = $faker->numberBetween(1,2); // Like 1 Stores / 2 Category
            
            $store->save();
        }
    }
}
