<?php

namespace Database\Seeders;

use App\Models\Subscriber;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 5; $i++) {
            $subscriber = new Subscriber();
            $subscriber->email = $faker->unique()->email;
            $subscriber->save();
        }
    }
}
