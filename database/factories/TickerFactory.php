<?php

namespace Database\Factories;

use App\Models\Ticker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticker>
 */
class TickerFactory extends Factory
{
    protected $model = Ticker::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'symbol' => strtoupper($this->faker->lexify('???')), // Generate a random stock symbol (3 uppercase letters)
            'open_value' => $this->faker->randomFloat(2, 1, 1000), // Random open value between 1 and 1000
            'close_value' => $this->faker->randomFloat(2, 1, 1000), // Random close value between 1 and 1000
            'current_value' => $this->faker->randomFloat(2, 1, 1000), // Random current value between 1 and 1000
            'market_cap' => $this->faker->numberBetween(1, 10000000), // Random market cap between 1 and 10 million
            'company_id' => \App\Models\Company::factory(), // Create a related company using the Company factory
        ];
    }
}
