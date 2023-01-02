<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ImportantNumber>
 */
class ImportantNumberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'uuid' => Str::uuid()->toString(),
            'regency' => $this->faker->randomElement(['Kab 1', 'Kab 2', 'Kab 3']),
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address
        ];
    }
}
