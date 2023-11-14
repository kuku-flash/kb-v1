<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagesToSparePartsTable extends Migration
{
    public function up()
    {
        Schema::table('spare_parts', function (Blueprint $table) {
            $table->string('front_img')->nullable();
            $table->string('back_img')->nullable();
            $table->string('right_img')->nullable();
            // Add more columns for optional images if needed
        });
    }

    public function down()
    {
        Schema::table('spare_parts', function (Blueprint $table) {
            $table->dropColumn(['front_img', 'back_img', 'right_img']);
            // Drop more columns for optional images if needed
        });
    }
}
