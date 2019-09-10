<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_visits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('topic_id')->unsigned();
            $table->integer('count')->default(0);
            $table->string('ip_address');
            $table->foreign('topic_id')->references('id')->on('forum_topics')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('topic_visits');
    }
}
