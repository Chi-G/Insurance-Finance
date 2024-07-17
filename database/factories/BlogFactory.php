<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Blog::class;

    public function definition()
    {
        return [
            'image_sm' => $this->faker->imageUrl(),
            'image_bg' => $this->faker->imageUrl(),
            'title' => $this->faker->sentence,
            'desc1' => $this->faker->paragraph,
            'desc2' => $this->faker->paragraph,
            'excert' => $this->faker->paragraph,
        ];
    }
}
