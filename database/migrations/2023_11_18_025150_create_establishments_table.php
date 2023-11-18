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
        Schema::create('establishments', function (Blueprint $table) {
            $table->bigIncrements('est_eq_id');
            $table->string('est_rspo_member_table')->nullable();
            $table->string('est_country_based_table')->nullable();
            $table->string('est_eudr_comodities_table')->nullable();
            $table->string('est_hscode_table')->nullable();
            $table->string('est_region_table')->nullable();
            $table->string('est_mill_list_availability_table')->nullable();
            $table->string('est_nr_mill_list_availability_table')->nullable();
            $table->string('est_cpo_table')->nullable();
            $table->string('est_pko_table')->nullable();
            $table->string('est_pke_table')->nullable();
            $table->string('est_derivatives_table')->nullable();
            $table->string('est_total_table')->nullable();
            $table->string('est_percent_eu_pro_sales_table')->nullable();
            $table->string('est_percent_rspo_certification_table')->nullable();
            $table->string('est_percetn_eu_rspo_certified_sales_table')->nullable();
            $table->string('est_volume_uncert_and_cert_sales_to_eu_table')->nullable();
            $table->string('est_priority_sales_by_three_category_table')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('establishments');
    }
};
