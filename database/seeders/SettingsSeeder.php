<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = [
            [
                'header_logo' => 'logo.png',
                'footer_logo' => 'logo.png',
                'favicon' => 'cart.png',
                'contact_number'=>'+923003185000',
                'contact_email'=>'contact@website.com',
                'location_address'=>'413 Park avenue, Apposite Habbit main branch, Karachi.',
                'contact_whatsapp'=> '+923003185000',
                'linkedin_account_link'=> 'https://www.linkedin.com/login',
                'instagram_account_link'=> 'https://www.instagram.com/accounts/login/',
                'facebook_account_link'=> 'https://www.facebook.com/login.php/',
                'youtube_account_link'=> 'https://www.youtube.com/',
                'footer_text'=> '© 2023 E Commerce. All Rights Reserved.',
                'title' => 'E Commerce',
                'keywords' => 'E commerce big shopping site.',
                'description' => 'E commerce big shopping site, a big project for e commerce',
            ],           
        ];
  
        foreach ($setting as $key => $value) {
            Setting::create($value);
        }
    }
}
