<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MoveTimestampsToLastInSparePartsTable extends Migration
{
    public function up()
    {
        Schema::table('spare_parts', function (Blueprint $table) {

            // Define the columns you want before the timestamps

            $table->timestamps(); // Recreate the timestamps at the end
        });
    }

    public function down()
    {
        Schema::table('spare_parts', function (Blueprint $table) {

            // Define the columns in the original order here

            $table->timestamps(); // Recreate the timestamps
        });
    }
}
