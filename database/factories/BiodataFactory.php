<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Biodata>
 */
class BiodataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $uniqueNIK = $this->faker->unique()->numberBetween(1604101002020000, 1604101002021000);
        return [
            'nik' => $uniqueNIK,
            'name' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),                 
            'date_of_birth' => $this->faker->date(),
            'address' => $this->faker->address()
        ];
    }
}
