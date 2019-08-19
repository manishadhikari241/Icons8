<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIconsStyleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icons_style', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('icon_id')->unsigned();
            $table->foreign('icon_id')->references('id')->on('icon_uploads')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('style_id')->unsigned();
            $table->foreign('style_id')->references('id')->on('icon_styles')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('icons_style');
    }
}
