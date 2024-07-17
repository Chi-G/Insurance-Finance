<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Team;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Team::class;

    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl(),
            'name' => $this->faker->name(),
            'position' => $this->faker->jobTitle(),
        ];
    }
}
