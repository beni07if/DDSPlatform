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
        Schema::create('ttps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('eqGml');
            $table->string('idUml');
            $table->string('mill_name');
            $table->string('mill_type');
            $table->string('company_name');
            $table->string('idGroup');
            $table->string('group_company_name');
            $table->string('country');
            $table->string('province');
            $table->string('district');
            $table->string('address');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('rspo_certification');
            $table->string('other_certification');
            $table->string('capacity');
            $table->string('ffb_volume_processed_by_mill');
            $table->string('cpo_production');
            $table->string('pko_production');
            $table->string('facility');
            $table->string('source');
            $table->string('e_eqGgl');
            $table->string('e_group_company');
            $table->string('e_eqGpl');
            $table->string('e_plantation_name');
            $table->string('e_idEstate');
            $table->string('e_name_estate');
            $table->string('e_mspo_mpob_link');
            $table->string('e_district');
            $table->string('e_province');
            $table->string('e_country');
            $table->string('e_source');
            $table->string('e_landbank');
            $table->string('e_latitude');
            $table->string('e_longitude');
            $table->string('e_latitude_by_lot');
            $table->string('e_longitude_by_lot');
            $table->string('e_planted_area');
            $table->string('e_type_of_supplier');
            $table->string('d_document_mill');
            $table->string('d_period_of_ffb');
            $table->string('d_date_of_publish_document');
            $table->string('d_ffb_process_category');
            $table->string('d_certification_stage');
            $table->string('d_certificate_number');
            $table->string('d_period_of_certificate');
            $table->string('d_ffb_supply_document');
            $table->string('d_ffb_supply_in_document_unmerge');
            $table->string('d_percent_ffb_supplier');
            $table->string('d_source_percent_ttp');
            $table->string('d_certification_body');
            $table->string('d_liability_2016-h12023');
            $table->string('d_vdf_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttps');
    }
};
