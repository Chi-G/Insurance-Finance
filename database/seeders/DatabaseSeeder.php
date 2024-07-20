<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Withdrawal;
use App\Models\Deposit;

use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed the withdrawals table with 1000 records
        Withdrawal::factory(1000)->create();
        $this->call(TeamSeeder::class);
        $this->call(InvestmentSeeder::class);
        $this->call(SubscriptionSeeder::class);
        $this->call(PlanSeeder::class);
    }
}
