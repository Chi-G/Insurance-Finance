<?php

namespace Database\Seeders;
use App\Models\Plan;
use App\Models\Subscription;
use App\Models\Transaction;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    public function run()
    {
        Plan::truncate();

        $plans = [
            [
                'name' => 'PRIME PROFIT ELITE PLAN',
                'min_investment' => 1000,
                'max_investment' => 5000,
                'average_monthly' => 50,
                'daily_profit' => 5,
            ],
            [
                'name' => 'PRESTIGE ELITE PLAN',
                'min_investment' => 2000,
                'max_investment' => 15000,
                'average_monthly' => 100,
                'daily_profit' => 15,
            ],
            [
                'name' => 'IMPERIAL INCOME ELITE PLAN----Popular',
                'min_investment' => 3000,
                'max_investment' => 20000,
                'average_monthly' => 200,
                'daily_profit' => 50,
            ],
            [
                'name' => 'TERRA ELITE PLAN----Best Sale',
                'min_investment' => 4000,
                'max_investment' => 25000,
                'average_monthly' => 250,
                'daily_profit' => 100,
            ],
            [
                'name' => 'PRESTIGE PORTFOLIO ELITE PLAN',
                'min_investment' => 5000,
                'max_investment' => 30000,
                'average_monthly' => 300,
                'daily_profit' => 115,
            ],
            [
                'name' => 'NEXUS ELITE PLAN',
                'min_investment' => 6000,
                'max_investment' => 35000,
                'average_monthly' => 325,
                'daily_profit' => 125,
            ],
            [
                'name' => 'ECHELON EQUITY ELITE PLAN',
                'min_investment' => 7000,
                'max_investment' => 40000,
                'average_monthly' => 350,
                'daily_profit' => 150,
            ],
            [
                'name' => 'ZENITH YIELD ELITE PLAN----Top Plan',
                'min_investment' => 10000,
                'max_investment' => 50000,
                'average_monthly' => 400,
                'daily_profit' => 200,
            ],
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
