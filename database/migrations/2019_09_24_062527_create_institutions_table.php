<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('institution_category_id')->nullable();
            $table->string('code');
            $table->string('name');
            $table->string('acronym');
            $table->boolean('questionnaire_target');
            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('institution_id')->references('id')->on('institutions')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}
