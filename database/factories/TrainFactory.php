<?php

namespace Database\Factories;

use App\Models\Train;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Train::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'agency' => $this->faker->company,
            'departure_station' => $this->faker->city,
            'arrival_station' => $this->faker->city,
            'departure_time' => $this->faker->time(),
            'arrival_time' => $this->faker->time(),
            'train_code' => $this->faker->unique()->randomNumber(),
            'num_carriages' => $this->faker->numberBetween(1, 10),
            'in_time' => $this->faker->boolean,
            'deleted' => $this->faker->boolean,
        ];
    }
}
