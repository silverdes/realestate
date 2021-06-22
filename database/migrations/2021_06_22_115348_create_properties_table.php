<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('estate_name')->nullable();
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');
            $table->foreignId('estate_type_id')->constrained('estate_types');
            $table->double('floor_space', 8, 2)->nullable();
            $table->integer('number_of_balconies')->nullable();
            $table->double('balconies_space', 8, 2)->nullable();
            $table->integer('number_of_bedrooms')->nullable();
            $table->integer('number_of_bathooms')->nullable();
            $table->integer('number_of_garages')->nullable();
            $table->integer('number_of_parking_spaces')->nullable();
            $table->boolean('pets_allowed')->default(0);
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
