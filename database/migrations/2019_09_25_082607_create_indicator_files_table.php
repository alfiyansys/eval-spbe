<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicatorFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicator_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('review_history_id');
            $table->foreign('review_history_id')->references('id')->on('review_histories')->onDelete('cascade');
            $table->string('filename');
            $table->string('extension');
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
        Schema::dropIfExists('indicator_files');
    }
}
