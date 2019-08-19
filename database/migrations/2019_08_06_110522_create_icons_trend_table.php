<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIconsTrendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icons_trend', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('icon_id')->unsigned();
            $table->foreign('icon_id')->references('id')->on('icon_uploads')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('trend_id')->unsigned();
            $table->foreign('trend_id')->references('id')->on('icon_trends')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('icons_trend');
    }
}
