<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoeshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoeshops', function (Blueprint $table) {
            $table->id();
            $table->string('category', 50);
            $table->string('brand', 50);
            $table->string('model', 50);
            $table->tinyInteger('size');
            $table->string('color', 50)->nullable;
            $table->String('price');
            $table->text('description');
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
        Schema::dropIfExists('shoeshops');
    }
}
