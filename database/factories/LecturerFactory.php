<?php

namespace Database\Factories;

use App\Models\Lecturer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LecturerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lecturer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'user_id' => User::factory(),
            'nid' => $this->faker->unique()->numberBetween(11111, 99999),
            'department'=> 'Informatics',
            'sex' => 'male',
            'address' => $this->faker->address,
            'email' => $this->faker->unique()->email,
            'phone' => $this->faker->unique()->phoneNumber,
        ];
    }
}
