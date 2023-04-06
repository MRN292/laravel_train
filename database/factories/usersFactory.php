<?php

namespace Database\Factories;

use App\Models\profile;
use App\Models\roles;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\profileFactory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\users>
 */
class usersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username'=>$this->faker->userName(),
            'password'=>$this->faker->password(),
            'email'=>$this->faker->email(),
            'profileId' => function(){
                return profile::factory()->create()->id;
            }
        ];
    }
}
