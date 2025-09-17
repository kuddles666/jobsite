<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'       => $this->faker->jobTitle(),
            'tags'        => $this->faker->randomElement(['laravel,php', 'vue,js', 'remote,full-time']),
            'company'     => $this->faker->company(),
            'location'    => $this->faker->city(),
            'email'       => $this->faker->unique()->companyEmail(),
            'website'     => $this->faker->url(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}

