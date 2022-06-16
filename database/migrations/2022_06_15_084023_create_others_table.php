<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOthersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('others', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('language1');
            $table->string('language2');
            $table->string('language3')->nullable();
            $table->string('language4')->nullable();
            $table->double('current_salary')->nullable();
            $table->boolean('relocation')->default(false);
            $table->boolean('travel')->default(false);
            $table->text('current_benefits')->nullable();
            $table->integer('availability');
            $table->text('professional_membership')->nullable();
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
        Schema::dropIfExists('others');
    }
}
