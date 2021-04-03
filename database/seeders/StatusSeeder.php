<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Status::create([
            'name'    => 'Received',
            'percent'    => 0
        ]);

        \App\Models\Status::create([
            'name'    => 'Preparing',
            'percent'    => 25
        ]);

        \App\Models\Status::create([
            'name'    => 'Ready to Deliver',
            'percent'    => 50
        ]);

        \App\Models\Status::create([
            'name'    => 'Delivering',
            'percent'    => 75
        ]);

        \App\Models\Status::create([
            'name'    => 'Delivered',
            'percent'    => 100
        ]);
    }
}
