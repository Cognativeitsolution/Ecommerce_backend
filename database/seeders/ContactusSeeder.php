<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for($i = 1; $i<=12; $i++){

            $contactus = new Contact;
            $contactus->name = $faker->sentence(2);
            $contactus->email = $faker->unique()->email();
            $contactus->subject = $faker->sentence(1);
            $contactus->message = $faker->paragraph(60);
            $contactus->save();
        }
    }
}
