<?php

namespace Database\Factories;

use App\Models\Investment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Investment>
 */
class InvestmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'daily_%' => $this->faker->randomFloat(2, 0.1, 5.0),
            'per_day' => $this->faker->randomFloat(2, 10, 500),
            'min_invest' => $this->faker->randomFloat(2, 100, 1000),
            'max_invest' => $this->faker->randomFloat(2, 1000, 10000),
            'average_month' => $this->faker->randomFloat(2, 300, 1500),
        ];
    }
}
