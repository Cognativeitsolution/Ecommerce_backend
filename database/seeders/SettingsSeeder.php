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
                'header_logo'               => 'logo.png',
                'footer_logo'               => 'logo.png',
                'favicon'                   => 'cart.png',
                'contact_number'            => '+923003185000',
                'contact_email'             => 'contact@website.com',
                'location_address'          => '413 Park avenue, Apposite Habbit main branch, Karachi.',
                'disclaimer'                => "Disclaimer Is Necessary For Our AS & Advertising Policies, But Make Sure That Your Ailment With All The Appropriates Government Regulations. Disclaimer Are Required For Everyone Who Can Make Money Form These Kind Of Ads Using Affiliate Links. The Only Purpose Is To Help Our Consumers Who Can Understood The Publisher Earn Money From That Links.If Publisher's Affiliate Links Seen On Some One Else's Website Or User Comments, A Disclaimer Should Be Added Any Time A Product Is Support Of And The Publisher Receives Reward. Its Is Necessary Of Both The Audibles And Visuals Disclaimer 22,426 On Videos Or Live Streaming As A Consumers Can Enter Or Exit A Video, Therefore A Clear Visual Disclaimer Is Available. All The Guideline Apply To Mobile Sites And Apps. Digital Marketing And Disclaimer Guidelines Will Continue To Changed And Evolve, So It Is Aware That Any Of The Changes And Make Sure That You Are Always Transparent With Consumers. 1,785 January",
                'facebook_account_link'     => 'https://www.facebook.com/login.php/',
                'instagram_account_link'    => 'https://www.instagram.com/accounts/login/',
                'twitter_account_link'      => 'https://www.twitter.com',
                'google_plus_account_link'  => 'https://www.google.com/',
                'pinterest_account_link'    => 'https://www.pinterest.com/',
                'footer_text'               => '© 2023 E Commerce. All Rights Reserved.',
                'title'                     => 'E Commerce',
                'keywords'                  => 'E commerce big shopping site.',
                'description'               => 'E commerce big shopping site, a big project for e commerce',
            ],           
        ];
  
        foreach ($setting as $key => $value) {
            Setting::create($value);
        }
    }
}
