<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('ad_type')->nullable();
            $table->integer('year_of_build')->nullable();
            $table->integer('is_carhire')->nullable();
            $table->string('condition')->nullable();
            $table->integer('mileage')->nullable();
            $table->string('transmission')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('exchange')->nullable();
            $table->string('price')->nullable();
            $table->string('description')->nullable();
            $table->string('body_type')->nullable();
            $table->string('duty_type')->nullable();
            $table->string('interior_type')->nullable();
            $table->string('engine_size')->nullable();
            $table->string('address')->nullable();

            $table->unsignedBigInteger('listing_id')->nullable();
            $table->foreign('listing_id')->references('id')->on('listings')->onDelete('cascade');
         
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
        Schema::dropIfExists('vehicles');
    }
}
