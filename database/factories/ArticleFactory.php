<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence;

        return [
            'title' => $title,
            'slug' => str_replace(' ', '-', $title),
            'article_category' => rand(1, 3),
            'description' => $this->faker->sentences(12, true),
            'time' => $this->faker->time('H:i'),
            'date' => $this->faker->date,
            'updated_by' => $this->faker->name,
            'image' => json_encode([])
        ];
    }
}
