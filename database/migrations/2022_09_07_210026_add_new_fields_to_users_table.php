<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->longText('bio')->nullable();
            $table->string('business_name')->nullable();
            $table->string('business_type')->nullable();
            $table->string('identification_number')->nullable();
            $table->string('kra_pin')->nullable();
            $table->string('city')->nullable();
            $table->longText('address')->nullable();
            $table->longText('map_address')->nullable();
            $table->string('whatsapp_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('website_link')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('bio');
            $table->dropColumn('business_name');
            $table->dropColumn('business_type');
            $table->dropColumn('identification_number');
            $table->dropColumn('kra_pin');
            $table->dropColumn('city');
            $table->dropColumn('address');
            $table->dropColumn('map_address');
            $table->dropColumn('whatsapp_link');
            $table->dropColumn('instagram_link');
            $table->dropColumn('facebook_link');
            $table->dropColumn('youtube_link');
            $table->dropColumn('website_link');
        });
    }
}
