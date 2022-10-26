<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCarHireFieldsToVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->integer('rent_days')->nullable();
            $table->string('price_per_day')->nullable();
            $table->date('pickup_date')->nullable();
            $table->date('return_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->dropColumn('rent_days');
            $table->dropColumn('price_per_day');
            $table->dropColumn('pickup_date');
            $table->dropColumn('return_date');
        });
    }
}
