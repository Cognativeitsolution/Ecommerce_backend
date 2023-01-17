<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\OurClient;

class OurClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 1; $i<=6; $i++){

            $our_client = new OurClient();
            $our_client->title = $faker->name(12);
            $our_client->image = "our_client.png";
            $our_client->save();
        }
    }
}
