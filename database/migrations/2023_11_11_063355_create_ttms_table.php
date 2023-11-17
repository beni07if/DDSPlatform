<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ttms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ttm_eq_id');
            $table->string('user_eq_id');
            $table->string('user_name');
            $table->string('user_company_group_id');
            $table->string('facility_eq_id');
            $table->string('mill_eq_id');
            $table->string('mill_uml_id');
            $table->string('mill_name');
            $table->string('ttm_source_type');
            $table->string('ttm_year_period');
            $table->string('ttm_date_update');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttms');
    }
};
