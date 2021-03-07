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
            $table->string('category', 50);
            $table->string('state', 50);
            $table->string('municipality', 50);
            $table->string('town', 50);
            $table->string('direction', 50);
            $table->string('owner', 50);
            $table->String('contactNumber', 12);
            $table->String('price');
            $table->tinyInteger('numberOfRooms');
            $table->tinyInteger('numberOfBathrooms');
            $table->string('comment')->nullable();
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
