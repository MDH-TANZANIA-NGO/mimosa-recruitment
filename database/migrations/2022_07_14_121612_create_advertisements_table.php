<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hire_requisition_id');
            $table->string('title');
            $table->date('deadline');
            $table->smallInteger('experience_years');
            $table->smallInteger('education_level');
            $table->integer('start_age');
            $table->integer('end_age');
            $table->unsignedBigInteger('designation_id');
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
        Schema::dropIfExists('advertisements');
    }
}
