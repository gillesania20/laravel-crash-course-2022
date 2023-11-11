<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'User One',
            'email' => 'user1@email.com'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'title one',
        //     'tags' => 'tag one, tag two',
        //     'company' => 'company one',
        //     'location' => 'location one',
        //     'email' => 'email@email.com',
        //     'website' => 'website one',
        //     'description' => 'description one'
        // ]);
        // Listing::create([
        //     'title' => 'title two',
        //     'tags' => 'tag one, tag two',
        //     'company' => 'company two',
        //     'location' => 'location two',
        //     'email' => 'email@email.com',
        //     'website' => 'website two',
        //     'description' => 'description two'
        // ]);

        //Listing::factory(6)->create();

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
    }
}
