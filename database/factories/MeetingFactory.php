<?php

namespace Database\Factories;

use App\Models\Meeting;
use Illuminate\Database\Eloquent\Factories\Factory;

class MeetingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Meeting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'type' => $this->faker->word(),
            'start' => $this->faker->dateTime(),
            'end' => $this->faker->dateTime(),
            'slug' => $this->faker->unique()->word(),
            'attendant_count' => 1,
            'report' => $this->faker->paragraph(),
            'creator_id',
            'creator_type',
        ];
    }
}
