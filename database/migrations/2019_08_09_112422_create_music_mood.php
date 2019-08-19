<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicMood extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_mood', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('music_id')->unsigned();
            $table->foreign('music_id')->references('id')->on('musics')->onUpdate('cascade')->onDelete('cascade');;
            $table->integer('mood_id')->unsigned();
            $table->foreign('mood_id')->references('id')->on('moods')->onUpdate('cascade')->onDelete('cascade');;
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
        Schema::dropIfExists('music_mood');
    }
}
