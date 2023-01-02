<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Investation>
 */
class InvestationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'uuid' => Str::uuid()->toString(),
            'fullname' => $this->faker->name(),
            'institute_name' => $this->faker->company(),
            'institute_address' => $this->faker->address(),
            'investation_category_id' => rand(1,2),
            'institute_email' => $this->faker->email(),
            'institute_phone_number' => $this->faker->phoneNumber(),
            'institute_description' => $this->faker->sentences(5, true)
        ];
    }
}
