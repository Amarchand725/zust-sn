<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        return [
            'created_by' => rand(1, 11),
            'title' => $title,
            'slug' => Str::slug($title),
            'short_description' => $this->faker->sentence(),
            'full_description' => $this->faker->text(),
            'mime_type' => 'image',
            'post' => $this->faker->imageUrl(640,480),
            'status' => rand(0, 1),
        ];
    }
}
