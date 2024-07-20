<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscription;
use App\Models\User;
use App\Models\Plan;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $plans = Plan::all();

        foreach ($users as $user) {
            Subscription::create([
                'user_id' => $user->id,
                'plan_id' => $plans->random()->id,
                'status' => 'not-subscribed',
            ]);
        }
    }
}
