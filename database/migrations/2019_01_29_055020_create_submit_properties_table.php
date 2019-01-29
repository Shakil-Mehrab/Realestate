<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmitPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submit_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('property_type');
            $table->string('country');
            $table->string('status');
            $table->string('image')->default('default.jpg');
            $table->string('area');
            $table->integer('nong_of_kitchen');
            $table->integer('nong_of_bedroom');
            $table->integer('nong_of_bathroom');
            $table->string('address');
            $table->string('state');
            $table->integer('postal_code');
            $table->string('detail');
            $table->string('checkbox')->nullable();
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
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
        Schema::dropIfExists('submit_properties');
    }
}
