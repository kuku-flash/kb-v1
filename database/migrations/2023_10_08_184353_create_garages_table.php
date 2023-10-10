<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garages', function (Blueprint $table) {
            $table->id();
            $table->string('garage_title');
            $table->string('garage_location');
            $table->text('garage_description')->nullable();
            $table->string('front_img')->nullable();
            $table->string('back_img')->nullable();
            $table->string('right_img')->nullable();
            $table->string('left_img')->nullable();
            $table->string('interiorf_img')->nullable();
            $table->string('interiorb_img')->nullable();
            $table->string('opt_img1')->nullable();
            $table->string('opt_img2')->nullable();
            $table->string('opt_img3')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('garages');
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */

}
