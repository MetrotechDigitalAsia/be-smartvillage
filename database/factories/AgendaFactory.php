<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agenda>
 */
class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $name = $this->faker->sentence(3);

        return [
            'title' => $name,
            'slug' => str_replace(' ', '-', $name),
            'description' => $this->faker->paragraph(),
            'author' => $this->faker->name,
            'time' => $this->faker->time('H:i'),
            'date' => $this->faker->date,
        ];
    }
}
