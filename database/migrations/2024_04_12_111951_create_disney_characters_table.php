<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disney_characters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('characterName');
            $table->string('characterType');
            $table->string('movieName');
            $table->string('characterQuote');
            $table->unsignedBigInteger('studio_id');
            $table->string('image_path');
            $table->timestamps();
            $table ->foreign ('studio_id')->references('id')-> on('disney_studios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disney_characters');
    }
};
