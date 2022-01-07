<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('id');
            $table->integer('user_id');
            $table->integer('work_id');
            $table->integer('review_grade');
            $table->text('review_comment');
            $table->timestamps();

            // $table->foreign('work_id')->references('id')->on('works');
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->unique(['product_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
