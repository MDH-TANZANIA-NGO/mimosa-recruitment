<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('organisation_name');
            $table->string('position');
            $table->longText('responsibilities');
            $table->text('reason_for_leaving')->nullable();
            $table->string('supervisor_email');
            $table->string('supervisor_phone');
            $table->string('supervisor_name');
            $table->date('start_year');
            $table->boolean('is_current')->default(false);
            $table->date('end_year')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('experiences');
    }
}
