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
        Schema::create('mills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mill_eq_id')->nullable();
            $table->string('mill_uml_id')->nullable();
            $table->string('mill_name')->nullable();
            $table->string('mill_company_name')->nullable();
            $table->string('mill_company_group_id')->nullable();
            $table->string('mill_company_group')->nullable();
            $table->string('mill_region')->nullable();
            $table->string('mill_country')->nullable();
            $table->string('mill_province')->nullable();
            $table->string('mill_district')->nullable();
            $table->string('mill_address')->nullable();
            $table->string('mill_type')->nullable();
            $table->string('mill_lat')->nullable();
            $table->string('mill_long')->nullable();
            $table->string('mill_rspo')->nullable();
            $table->string('mill_mspo')->nullable();
            $table->string('mill_capacity')->nullable();
            $table->string('mill_methane_capture')->nullable();
            $table->string('mill_deforestation_risk')->nullable();
            $table->string('mill_legal_prf_risk')->nullable();
            $table->string('mill_legal_production_forest')->nullable();
            $table->string('mill_legal_conservation_area')->nullable();
            $table->string('mill_legal_landuse_risk')->nullable();
            $table->string('mill_complex_supplybase_risk')->nullable();
            $table->string('mill_date_update')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mills');
    }
};
