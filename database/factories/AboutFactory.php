<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title1' => $this->faker->word,
            'title1_desc' => $this->faker->paragraph,
            'mission_desc' => $this->faker->paragraph,
            'vision_desc' => $this->faker->paragraph,
            'experience_desc' => $this->faker->paragraph,
            'title2' => $this->faker->word,
            'title2_desc' => $this->faker->paragraph,
            'image1' => $this->faker->imageUrl(640, 480, 'business', true),
            'image2' => $this->faker->imageUrl(640, 480, 'business', true),
        ];
    }
}
