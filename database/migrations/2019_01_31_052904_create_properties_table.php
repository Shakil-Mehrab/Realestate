<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index(); 
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
            $table->integer('nong_of_gourage');
            $table->integer('price');
            $table->string('location');
            $table->text('detail');
            $table->string('checkbox')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->integer('views')->default('0');
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
        Schema::dropIfExists('properties');
    }
}
