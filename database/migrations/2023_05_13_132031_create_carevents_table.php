<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carevents', function (Blueprint $table) {
            $table->id();
            $table->string('event_title')->unique();
            $table->string('event_location')->nullable();
            $table->string('event_description')->nullable();
            $table->date('event_date')->nullable();
            $table->time('event_time')->nullable();
            $table->string('organizer')->nullable();
            $table->string('event_image')->nullable();
            $table->integer('ticket_price')->nullable();
            $table->integer('event_duration')->nullable();
 
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('carevents');
    }
}
