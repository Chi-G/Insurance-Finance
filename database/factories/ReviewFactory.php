<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Review;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Review::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'position' => $this->faker->jobTitle,
            'status' => $this->faker->randomElement(['Active', 'Inactive']),
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph,
        ];
    }
}
