<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VisitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('id_ID');

        return [
            'name' => $faker->name(),
            'phone_number' => $faker->phoneNumber(),
            'email' => $faker->safeEmail(),
            'ticket' => $faker->randomElement(['regular', 'rockstar', 'vip'], true)
        ];
    }
}
