<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'John',
            'email'=> 'john@gmail.com'
        ]);

        Listing::factory(7)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Listing::create([
        //     'title'=>'Laravel senior developer',
        //     'tags'=> 'laravel javascrip',
        //     'company'=> 'Acme cerop',
        //     'location'=> 'Boston , MA',
        //     'email'=> 'myemail@gmail.com',
        //     'website' => 'ourwen.com',
        //     'description'=> 'descriptio for the senior developer'
        // ]);
        // Listing::create([
        //     'title'=>'Laravel junior developer',
        //     'tags'=> 'laravel javascrip',
        //     'company'=> 'Acme cerop',
        //     'location'=> 'Boston , MA',
        //     'email'=> 'myemail@gmail.com',
        //     'website' => 'ourwen.com',
        //     'description'=> 'descriptio for the senior developer'
        // ]);
    }
}
