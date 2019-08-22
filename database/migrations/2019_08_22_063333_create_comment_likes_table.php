<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_likes', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('likes')->default(0);
            $type = DB::connection()->getDoctrineColumn('users', 'id')->getType()->getName();
            if ($type == 'bigint') {
                $table->bigInteger('user_id')->unsigned()->index();
            } else {
                $table->integer('user_id')->unsigned()->index();
            }
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('comment_id')->unsigned();
            $table->foreign('comment_id')->references('id')->on('topic_comments')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('comment_likes');
    }
}
