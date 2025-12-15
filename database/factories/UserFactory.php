<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

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
        $roles = ['admin', 'reception', 'doctor', 'accountant', 'pharmacist'];
        $firstName = fake()->firstName();
        $lastName = fake()->lastName();
        $username = Str::slug($firstName . '.' . $lastName . fake()->numberBetween(1, 99));

        $doctorIds = DB::table('doctors')->pluck('id')->toArray();
        $doctorId = !empty($doctorIds) ? Arr::random($doctorIds) : null;

        return [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'username' => $username,
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'phone' => fake()->optional()->phoneNumber(),
            'role' => Arr::random($roles),
            'doctor_id' => $doctorId,
            'is_active' => true,
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
