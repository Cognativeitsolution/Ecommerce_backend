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
                'name' => 'Laravel',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'React JS',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Angular JS',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Python',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Java',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Discount 10%',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Shopping',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Discount Deal',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Coupon Code',
                'created_at' => now(),
                'updated_at' => now()
            ],
            
        ];
        Tag::insert($data);
    }
}
