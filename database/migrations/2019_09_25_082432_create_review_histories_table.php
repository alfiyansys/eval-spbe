<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('indicator_option_id');
            $table->foreign('indicator_option_id')->references('id')->on('indicator_options')->onDelete('cascade');
            $table->unsignedBigInteger('role_user_form_id');
            $table->foreign('role_user_form_id')->references('id')->on('role_user_form')->onDelete('cascade');
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
        Schema::dropIfExists('review_histories');
    }
}
