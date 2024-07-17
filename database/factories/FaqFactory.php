<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Faq;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faq>
 */
class FaqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Faq::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'faq1_title' => $this->faker->sentence,
            'faq1_desc' => $this->faker->paragraph,
            'faq2_title' => $this->faker->sentence,
            'faq2_desc' => $this->faker->paragraph,
            'faq3_title' => $this->faker->sentence,
            'faq3_desc' => $this->faker->paragraph,
            'faq4_title' => $this->faker->sentence,
            'faq4_desc' => $this->faker->paragraph,
            'faq5_title' => $this->faker->sentence,
            'faq5_desc' => $this->faker->paragraph,
        ];
    }
}
