<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company, // Generates a random company name
            'logo_url' => $this->faker->imageUrl(200, 200, 'business'), // Generates a random image URL
            'description' => $this->faker->paragraph, // Generates a random description
            'phone_number' => $this->faker->phoneNumber, // Generates a random phone number
            'country' => $this->faker->country, // Generates a random country name
            'address' => $this->faker->address, // Generates a random address
            'foundation_date' => $this->faker->date(), // Generates a random date
            'num_workers' => $this->faker->numberBetween(1, 5000), // Generates a random number of workers
            'value' => $this->faker->randomFloat(2, 1, 100000), // Generates a random float value
        ];
    }
}
