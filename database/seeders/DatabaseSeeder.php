<?php

namespace Database\Seeders;

use App\Models\CredentialApproval;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create();

        User::query()->create([
            'first_name' => 'Chris Dominic',
            'middle_name' => 'Panaguiton',
            'last_name' => 'Chan',
            'username' => 'admin',
            'email' => 'adm@gmail.com',
            'user_type' => 'Admin',
            'profile_picture' => fake()->imageUrl(),
            'banner_picture' => fake()->imageUrl(),
            'bio' => 'The quick brown fox jumps over the lazy dog.',
            'website_link' => fake()->url(),
            'birthdate' => fake()->date(),
            'is_suspended' => false,
            'password' => bcrypt('password'),
        ]);

        $freelancer = User::query()->create([
            'first_name' => 'Chris Dominic',
            'middle_name' => 'Panaguiton',
            'last_name' => 'Chan',
            'username' => 'freelancer',
            'email' => 'fre@gmail.com',
            'user_type' => 'Freelancer',
            'profile_picture' => fake()->imageUrl(),
            'banner_picture' => fake()->imageUrl(),
            'bio' => 'The quick brown fox jumps over the lazy dog.',
            'website_link' => fake()->url(),
            'birthdate' => fake()->date(),
            'is_suspended' => false,
            'password' => bcrypt('password'),
        ]);

        $client = User::query()->create([
            'first_name' => 'Chris Dominic',
            'middle_name' => 'Panaguiton',
            'last_name' => 'Chan',
            'username' => 'client',
            'email' => 'cli@gmail.com',
            'user_type' => 'Client',
            'profile_picture' => fake()->imageUrl(),
            'banner_picture' => fake()->imageUrl(),
            'bio' => 'The quick brown fox jumps over the lazy dog.',
            'website_link' => fake()->url(),
            'birthdate' => fake()->date(),
            'is_suspended' => false,
            'password' => bcrypt('password'),
        ]);

        CredentialApproval::query()->create([
            'user_id' => $freelancer->id,
            'status' => 'Pending',
            'front_id_image' => fake()->imageUrl(),
            'back_id_image' => fake()->imageUrl(),
            'selfie_image' => fake()->imageUrl(),
        ]);

        CredentialApproval::query()->create([
            'user_id' => $client->id,
            'status' => 'Pending',
            'front_id_image' => fake()->imageUrl(),
            'back_id_image' => fake()->imageUrl(),
            'selfie_image' => fake()->imageUrl(),
        ]);
    }
}
