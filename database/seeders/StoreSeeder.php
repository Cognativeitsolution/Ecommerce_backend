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

        for($i = 1; $i<=10; $i++){

            $store = new Store;

            $store->uuid = rand(10000,9999999);
            $store->name = $faker->sentence(4);
            $store->title = $faker->text(50);            
            $store->short_description = $faker->text(100);
            $store->long_description = $faker->paragraph(60);
            $store->image = "store_image.png";
            $store->banner_image = "banner_image.jpg";
            $store->type = 1;
            
            $store->save();
        }
    }
}
