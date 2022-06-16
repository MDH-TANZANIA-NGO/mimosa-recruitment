<?php

use Database\TableComment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    use TableComment;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function(Blueprint $table)
        {
            $table->smallInteger('id', true);
            $table->string('name', 191)->unique();
            $table->smallInteger('country_id')->index();
            $table->timestamps();
            $table->string('hasc', 6)->nullable();
            $table->smallInteger('isactive')->default(1);
            $table->integer('zone_id')->nullable();
            $table->boolean('exceptional')->default(false);
        });
        $this->comment("regions", "regions in tanzania");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
