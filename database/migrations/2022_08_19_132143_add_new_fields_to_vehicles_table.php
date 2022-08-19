<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->string('vehicle_type')->nullable();
            $table->string('front_img')->nullable();
            $table->string('back_img')->nullable();
            $table->string('right_img')->nullable();
            $table->string('left_img')->nullable();
            $table->string('interiorf_img')->nullable();
            $table->string('interiorb_img')->nullable();
            $table->string('engine_img')->nullable();
            $table->string('opt_img1')->nullable();
            $table->string('opt_img2')->nullable();
            $table->string('opt_img3')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('youtube_link')->nullable();             

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
            $table->dropColumn('vehicle_type');
            $table->dropColumn('front_img');
            $table->dropColumn('back_img');
            $table->dropColumn('right_img');
            $table->dropColumn('left_img');
            $table->dropColumn('interiorf_img');
            $table->dropColumn('interiorb_img');
            $table->dropColumn('engine_img');
            $table->dropColumn('opt_img1');
            $table->dropColumn('opt_img2');
            $table->dropColumn('opt_img3');
            $table->dropColumn('instagram_link');
            $table->dropColumn('facebook_link');
            $table->dropColumn('youtube_link');
        });
    }
}
