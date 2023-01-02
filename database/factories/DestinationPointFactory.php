<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DestinationPoint>
 */
class DestinationPointFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $name = $this->faker->name;

        return [
            'name' => $name,
            'slug' => str_replace(' ', '-',Str::lower($name)),
            'category' => $this->faker->randomElement(['Nature', 'Culinary', 'Worship', 'Transportation', 'Shopping']),
            'address' => $this->faker->address,
            'description' => $this->faker->sentences(4, true),
            'lat' => $this->faker->latitude,
            'long' => $this->faker->longitude,
            'status' => $this->faker->randomElement([1,0]),
            'priority' => $this->faker->randomElement([1,0]),
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
