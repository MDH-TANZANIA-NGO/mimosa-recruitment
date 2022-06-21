<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('references', function (Blueprint $table) {
            $table->uuid('uuid');
            $table->smallInteger('reference_type_cv_id');
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade');
            $table->foreignId('region_id')->nullable()->constrained('regions')->onDelete('cascade');
            $table->softDeletes();
;        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('references', function (Blueprint $table) {
            $table->dropColumn('uuid');
            $table->dropColumn('deleted_at');
            $table->dropColumn('country_id');
            $table->dropColumn('region_id');
            $table->dropColumn('reference_type_cv_id');
        });
    }
}
