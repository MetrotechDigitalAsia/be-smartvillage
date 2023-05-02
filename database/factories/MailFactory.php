<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mail>
 */
class MailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $title = $this->faker->word();

        return [
            'title' => $title,
            'slug' => str_replace(' ',' -',strtolower($title)),
            'image' => '-',
            'description' => $this->faker->sentence,
        ];
    }
}
