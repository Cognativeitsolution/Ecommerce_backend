<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Discount Available',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Shopping Discount',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Discount Deal',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Free Coupon Code',
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ];
        Tag::insert($data);
    }
}
