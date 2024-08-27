<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->optional()->lastName(),
            'last_name' => fake()->lastName(),
            'username' => fake()->userName(),
            'email' => fake()->email(),
            'user_type' => fake()->randomElement(['Admin', 'Freelancer', 'Client']),
            'profile_picture' => fake()->imageUrl(),
            'banner_picture' => fake()->imageUrl(),
            'bio' => fake()->sentence(),
            'website_link' => fake()->url(),
            'birthdate' => fake()->date(),
            'is_suspended' => fake()->boolean(),
            'password' => bcrypt('password'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
