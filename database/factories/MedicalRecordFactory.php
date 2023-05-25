<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedicalRecord>
 */
class MedicalRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => fake()->dateTime(),
            'anamnesis' => fake()->sentence(),
            'diagnosis' => fake()->sentence(),
            'therapy' => fake()->sentence(), 
            'patient_id' => fake()->randomDigit()
        ];
    }
}
