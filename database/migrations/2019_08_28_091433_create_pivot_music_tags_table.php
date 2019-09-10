<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotMusicTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_music_tags', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('music_id')->unsigned();
            $table->foreign('music_id')->references('id')->on('musics')->onUpdate('cascade')->onDelete('cascade');;
            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('music_tags')->onUpdate('cascade')->onDelete('cascade');;
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
        Schema::dropIfExists('pivot_music_tags');
    }
}
