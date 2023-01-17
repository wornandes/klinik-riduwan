<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'birthdate' => fake()->dateTime(),
            'sex' => fake()->word(),
            'address' => fake()->sentence(), 
            'allergy' => fake()->word(),
            'phone' => fake()->randomDigit(),
        ];
    }
}
