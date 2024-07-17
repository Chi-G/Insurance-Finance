<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscription;
use App\Models\User;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Subscription::factory(4)->create();

        // Assuming you already have users in your users table
        $users = User::take(4)->get();

        // Creating 3 demo subscriptions for the first 3 users
        $users->each(function($user, $index) {
            $statuses = ['not-subscribed', 'pending', 'processing', 'active-subscription'];

            Subscription::create([
                'user_id' => $user->id,
                'plan' => 'Plan ' . ($index + 1),
                'status' => $statuses[$index % count($statuses)], // Use correct status values
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });
    }
}
