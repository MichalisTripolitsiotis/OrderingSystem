<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::create([
            'name'           => 'Special',
            'description'    => 'Lorem Ipsum',
            'price'          => 10,
            'category_id'    => 1
        ]);

        \App\Models\Product::create([
            'name'           => 'Pepperoni',
            'description'    => 'Lorem Ipsum',
            'price'          => 9,
            'category_id'    => 1
        ]);

        \App\Models\Product::create([
            'name'           => 'Aegean',
            'description'    => 'Lorem Ipsum',
            'price'          => 11,
            'category_id'    => 1
        ]);
    }
}
