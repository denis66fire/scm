<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MarketplaceInventory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('marketplace_inventory', function (Blueprint $table) {
            $table->id();
            $table->string('dealer_id');
            $table->string('oem_spec_id');
            $table->string('km_on_odometer');
            $table->string('scratches');
            $table->string('original_paint');
            $table->integer('no_accident');
            $table->integer('no_pre_buyer');
            $table->string('place_of_registration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
