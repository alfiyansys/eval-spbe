<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institution_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
        });
        Schema::table('institutions', function (Blueprint $table) {
            $table->foreign('institution_category_id')->references('id')->on('institution_categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institution_categories');
    }
}
