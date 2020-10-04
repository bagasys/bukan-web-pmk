<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nrp' => $this->faker->unique()->numberBetween(1000, 9999),
            'name' => $this->faker->name,
            'department' => 'Informatics',
            'sex' => 'male',
            'birth_date' => $this->faker->date,
            'phone' => $this->faker->phoneNumber,
            'current_address' => $this->faker->streetAddress,
            'origin_address' => $this->faker->streetAddress,
            'guardian_name' => $this->faker->name,
            'guardian_phone' => $this->faker->phoneNumber,
            'year_entry' => 2020,
            'year_graduate' => 2025,
        ];
    }
}
