<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserBusinessItem>
 */
class UserBusinessItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,5),
            'uuid' => Str::uuid()->toString(),
            'item_name' => 'barang umkm' ,
            'user_phone_number' => '087819582058',
            'item_category_id' => random_int(1,2),
            'item_image' => 'userBusinessItem/mmCdHDOgdfmKrgzRVtRKcBRYGfBrL2mXuW8fsU0X.webp',
            'item_price' => rand(10.00, 60.00),
            'item_description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['approve', 'pending', 'rejected']),
        ];
    }
}
