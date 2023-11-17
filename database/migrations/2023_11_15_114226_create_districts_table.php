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
        Schema::create('districts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('district_eq_id')->nullable();
            $table->string('district_name')->nullable();
            $table->string('district_country')->nullable();
            $table->string('district_province')->nullable();
            $table->string('district_deforestation_risk')->nullable();
            $table->string('district_ip_risk')->nullable();
            $table->string('district_traceability_risk')->nullable();
            $table->string('district_data_source_risk')->nullable();
            $table->string('district_others_risk')->nullable();
            $table->string('district_overall_risk')->nullable();
            $table->string('district_date_update')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};
