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
         //User::factory(5)->create();

         $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
         ]);

         Listing::factory(2)->create([
            'user_id' => $user->id
         ]);

         /*Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email1@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore doloribus harum obcaecati beatae assumenda praesentium pariatur quo nesciunt. Dolor exercitationem cumque deserunt temporibus iure vitae similique veritatis aut, aliquam libero modi alias voluptatibus corrupti repudiandae adipisci doloribus sapiente, voluptates placeat?'
         ]);

         Listing::create([
            'title' => 'Full-Stack Engineer',
            'tags' => 'laravel,backend, api',
            'company' => 'Stark Industries',
            'location' => 'New York, NY',
            'email' => 'email2@email.com',
            'website' => 'https://www.starkindustries.com',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore doloribus harum obcaecati beatae assumenda praesentium pariatur quo nesciunt. Dolor exercitationem cumque deserunt temporibus iure vitae similique veritatis aut, aliquam libero modi alias voluptatibus corrupti repudiandae adipisci doloribus sapiente, voluptates placeat?'
         ]);*/



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
