<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faculty;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Using Eloquent model to insert data
        Faculty::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'department' => 'Computer Science',
            'salary' => 60000,
        ]);

        // You can also create multiple records using factory
        Faculty::factory()->count(10)->create(); // If you are using factory for fake data

        // Or, if you are using DB facade:
        // DB::table('faculties')->insert([
        //     'first_name' => 'Jane',
        //     'last_name' => 'Smith',
        //     'email' => 'jane.smith@example.com',
        //     'department' => 'Mathematics',
        //     'salary' => 70000,
        // ]);
        Faculty::factory()->count(10)->create(); // Create 10 fake faculty records

    }
    
}
