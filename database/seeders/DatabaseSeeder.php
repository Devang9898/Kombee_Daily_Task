<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Post::factory(10)->hasComments(5)->create();
    }
}

















/**class DatabaseSeeder extends Seeder
{
    ////////**
     * Seed the application's database.
     *//////////
/*
 public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
**/
