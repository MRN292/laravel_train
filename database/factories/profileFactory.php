<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\profile>
 */
class profileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>$this->faker->name(),
            'phone_number' =>$this->faker->phoneNumber(),
            'cost' =>mt_rand(1000000, 10000000),
            'bio'=>$this->faker->text(),
        ];
    }
}
