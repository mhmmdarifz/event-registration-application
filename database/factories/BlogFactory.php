<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogFactory extends Factory
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
            'image' => $faker->imageUrl(640, 480, 'cats', true),
            'title' => $faker->words(8, true),
            'content' => $faker->sentences(10, true),
            'created_at' => Carbon::now()->subYear(),
            'updated_at' => $faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
