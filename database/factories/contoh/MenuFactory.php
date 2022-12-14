<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'namaMenu'=>$this->faker->sentence(2),
            'stok'=>$this->faker->RandomDigit(3),
            'harga'=>$this->faker->RandomFloat(1,10,20),
        ];
    }
}
