<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Deposit;
use Faker\Factory as Faker;

class DepositSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 1000) as $index) {
            Deposit::create([
                'name' => $faker->name,
                'date' => $faker->date(),
                'amount' => $faker->randomFloat(2, 100, 10000),
                'currency' => $faker->randomElement(['Bitcoin', 'USD', 'Ripple']),
            ]);
        }
    }
}
