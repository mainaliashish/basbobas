<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->text('company_description');
            $table->text('company_mission')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('company_location');
            $table->string('company_address');
            $table->string('company_about_image')->nullable();
            $table->string('phone_number_one');
            $table->string('phone_number_two')->nullable();
            $table->string('phone_number_three')->nullable();
            $table->string('phone_number_four')->nullable();
            $table->string('company_email');
            $table->string('company_fax')->nullable();
            $table->string('company_facebook')->nullable();
            $table->string('company_twitter')->nullable();
            $table->text('company_map')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
