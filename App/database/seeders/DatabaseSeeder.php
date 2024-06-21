<?php

namespace Database\Seeders;

use App\Models\Note; //make sure this gets imported otherwise the //Note::factory(100)->create(); doesnt work(doesnt know where to look...)
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a user to associate with the notes
        User::factory()->create([
            'id' => 1,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('pass123.'),
        ]);

        // Create 100 notes associated with the user
        Note::factory(100)->create();
    }
}

