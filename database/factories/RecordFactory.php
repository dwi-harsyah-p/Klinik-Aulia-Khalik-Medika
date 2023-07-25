<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $userIds = User::where('level_id', 4)->pluck('id')->toArray();
        return [
            'diagnosis' => $this->faker->sentence(2),
            'complaint' => $this->faker->sentence(2),
            'action' => $this->faker->sentence(1),
            'poly' => $this->faker->sentence(1),
            'user_id' => $this->faker->randomElement($userIds),
            'medicine_id' => mt_rand(1, 20),      
            'qty' => mt_rand(1, 10),      
            'refferal' => $this->faker->sentence(1)
        ];
    }
}
