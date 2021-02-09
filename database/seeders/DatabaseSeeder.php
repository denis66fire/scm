<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\OemSpec::factory(5)->create()->each(function ($u) {
            \App\Models\Color::factory(3)->create();
            \App\Models\Dealer::factory( 5)->create()->each(function ($u) {
                \App\Models\MarketPlaceInventory::factory(10)->create();
           });
       });
        

       
    }
}
