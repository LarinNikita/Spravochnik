<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Post;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'FIO' => fake()->name(),
            'ip' => $this->faker->localIpv4,
            'account' => fake()->unique()->safeEmail(),
            'password' => random_int(10000, 99999),
            'isChief' => random_int(0, 1),
            'msOutlookMail' => $this->faker->email,
            'officeNumber' => random_int(100, 999),
            'ipPhone' => random_int(1000, 9999),
            'phoneNumber' => $this->faker->phoneNumber,

            'post_id' => Post::get()->random()->id,
            'status_id' => Status::get()->random()->id,
            'os_id' => Status::get()->random()->id,
            'department_id' => Department::get()->random()->id,

            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
