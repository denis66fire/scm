<?php

namespace Database\Factories;

use App\Models\MarketplaceInventory;
use Illuminate\Database\Eloquent\Factories\Factory;

class MarketplaceInventoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MarketplaceInventory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'dealer_id' => function () {
                return \App\Models\Dealer::factory()->create()->id;
            },
            'oem_spec_id' =>  function () {
                return \App\Models\OemSpec::factory()->create()->id;
            },
            'km_on_odometer' => $this->faker->numberBetween($min = 4000, $max = 80000),
            'scratches' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'original_paint' => $this->faker->randomElement($array = array ('yes','no')),
            'no_accident' => $this->faker->numberBetween($min = 0, $max = 10),
            'no_pre_buyer' => $this->faker->numberBetween($min = 1, $max = 4),
            'place_of_registration' => $this->faker->city,
        ];
    }
}
