<?php

namespace Database\Factories;

use App\Models\Deposit;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepositFactory extends Factory
{
    protected $model = Deposit::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'date' => $this->faker->date(),  // Generate a valid date
            'amount' => $this->faker->randomFloat(2, 100, 10000),
            'currency' => $this->faker->currencyCode,
        ];
    }
}
