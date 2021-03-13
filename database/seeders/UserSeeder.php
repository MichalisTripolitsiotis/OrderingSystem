<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'              => 'Michalis Tripolitsiotis',
            'email'             => 'michalis@example.com',
            'password'          => bcrypt('password'),
            'email_verified_at' => Carbon::now(),
            'role_id'           => Role::ADMIN
        ]);


        \App\Models\User::create([
            'name'              => 'John Doe',
            'email'             => 'john@example.com',
            'password'          => bcrypt('password'),
            'email_verified_at' => Carbon::now(),
            'role_id'           => Role::EMPLOYEE
        ]);

        \App\Models\User::create([
            'name'              => 'Peter Doe',
            'email'             => 'peter@example.com',
            'password'          => bcrypt('password'),
            'email_verified_at' => Carbon::now(),
            'role_id'           => Role::CLIENT
        ]);
    }
}
