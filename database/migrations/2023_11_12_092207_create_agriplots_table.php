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
        Schema::create('agriplots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('agriplot_eq_id')->nullable();
            $table->string('agriplot_type')->nullable();
            $table->string('agriplot_estate_name_id')->nullable();
            $table->string('agriplot_estate_name')->nullable();
            $table->string('agriplot_company_name_id')->nullable();
            $table->string('agriplot_company_name')->nullable();
            $table->string('agriplot_company_group_id')->nullable();
            $table->string('agriplot_company_group')->nullable();
            $table->string('agriplot_country')->nullable();
            $table->string('agriplot_province')->nullable();
            $table->string('agriplot_district')->nullable();
            $table->string('agriplot_subdistrict')->nullable();
            $table->string('agriplot_village')->nullable();
            $table->string('agriplot_address')->nullable();
            $table->string('agriplot_rspo')->nullable();
            $table->string('agriplot_mspo')->nullable();
            $table->string('agriplot_legality_source')->nullable();
            $table->string('agriplot_legality_status')->nullable();
            $table->string('agriplot_landbank_ha')->nullable();
            $table->string('agriplot_planted_ha')->nullable();
            $table->string('agriplot_deforestation_risk')->nullable();
            $table->string('agriplot_legal_prf_risk')->nullable();
            $table->string('agriplot_legal_landuse_risk')->nullable();
            $table->string('agriplot_complex_supplybase_risk')->nullable();
            $table->string('agriplot_overall_risk')->nullable();
            $table->string('agriplot_date_update')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agriplots');
    }
};
