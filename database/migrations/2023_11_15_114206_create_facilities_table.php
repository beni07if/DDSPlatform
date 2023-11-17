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
        Schema::create('facilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('facilities_eq_id')->nullable();
            $table->string('facilities_name')->nullable();
            $table->string('facilities_company_group_id')->nullable();
            $table->string('facilities_company_group')->nullable();
            $table->string('facilities_country')->nullable();
            $table->string('facilities_province')->nullable();
            $table->string('facilities_district')->nullable();
            $table->string('facilities_address')->nullable();
            $table->string('facilities_type')->nullable();
            $table->string('facilities_lat')->nullable();
            $table->string('facilities_long')->nullable();
            $table->string('facilities_rspo')->nullable();
            $table->string('facilities_date_update')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};
