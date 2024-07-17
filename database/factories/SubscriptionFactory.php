<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subscription;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $statuses = ['not-subscribed', 'pending', 'processing', 'active-subscription'];

        return [
            'user_id' => \App\Models\User::factory(),
            'plan' => $this->faker->word,
            'status' => $this->faker->randomElement($statuses),
        ];
    }
}
