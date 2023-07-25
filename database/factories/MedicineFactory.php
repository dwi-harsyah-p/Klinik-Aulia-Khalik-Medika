<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicine>
 */
class MedicineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => mt_rand(1, 4),
            'name' => $this->faker->sentence(1),
            // 'slug' => $this->faker->slug(),            
            'dosis' => $this->faker->sentence(1),
            'stock' => mt_rand(10, 20),
            // 'expired' => $this->faker->date()
        ];
    }
}
