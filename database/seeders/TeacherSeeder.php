<?php

namespace Database\Seeders;

use App\Models\Teacher;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;




   


// database/seeders/TeacherSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder; // Ensure this line is present
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        Teacher::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password',
        ]);
    }
}
