<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'namaStaff'=>$this->faker->name(2),
            'telpStaff'=>$this->faker->RandomDigit(12),
            'emailStaff'=>$this->faker->email(),
            'idCabang'=>$this->faker->unique(3)->RandomDigit
        ];
    }
}
