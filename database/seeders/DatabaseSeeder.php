<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

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

        Listing::factory(6)->create();
    }
}
