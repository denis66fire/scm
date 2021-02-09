<?php

namespace Database\Factories;

use App\Models\OemSpec;
use Illuminate\Database\Eloquent\Factories\Factory;

class OemSpecFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OemSpec::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'oem_name' => $this->faker->company,
            'model' => $this->faker->unique()->numerify('car ######'),
            'year_of_model' => $this->faker->year($max = 'now'),
            'mileage' => $this->faker->numberBetween($min = 5, $max = 50),
            'power' => $this->faker->numberBetween($min = 100, $max = 1000),
            'max_speed' => $this->faker->numberBetween($min = 120, $max = 300),
            
        ];
    }
}
