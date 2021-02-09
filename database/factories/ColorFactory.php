<?php

namespace Database\Factories;

use App\Models\Color;
use Illuminate\Database\Eloquent\Factories\Factory;

class ColorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Color::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'oem_spec_id' =>function () {
                return \App\Models\OemSpec::factory()->create()->id;
            },
            'color' => $this->faker->hexcolor,
        ];
    }
}
