<?php

namespace Database\Factories;

use App\Models\Withdrawal;
use Illuminate\Database\Eloquent\Factories\Factory;

class WithdrawalFactory extends Factory
{
    protected $model = Withdrawal::class;

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
