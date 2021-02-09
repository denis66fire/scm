<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OemSpecs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('oem_specs', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('oem_name');
            $table->string('model')->unique();
            $table->string('year_of_model');
            $table->string('mileage');
            $table->float('power');
            $table->integer('max_speed');
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
