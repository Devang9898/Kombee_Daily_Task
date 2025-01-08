<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TouristsTableSeeder extends Seeder
{
    public function run()
    {
        /*DB::table('tourists')->insert([
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'phone' => '1234567890',
                'dob' => '1985-06-15',
                'gender' => 'female',
                'country' => 'USA',
                'preferences' => 'beaches,mountains'
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob@example.com',
                'phone' => '0987654321',
                'dob' => '1990-08-25',
                'gender' => 'male',
                'country' => 'Canada',
                'preferences' => 'cities,adventures'
            ]
        ]);*/
        Tourist::factory()->count(10)->create();
    }
}


