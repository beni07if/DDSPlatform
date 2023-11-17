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
        Schema::create('refineries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('refinery_eq_id')->nullable();
            $table->string('refinery_name')->nullable();
            $table->string('refinery_company_group_id')->nullable();
            $table->string('refinery_company_group')->nullable();
            $table->string('refinery_country')->nullable();
            $table->string('refinery_province')->nullable();
            $table->string('refinery_district')->nullable();
            $table->string('refinery_address')->nullable();
            $table->string('refinery_type')->nullable();
            $table->string('refinery_lat')->nullable();
            $table->string('refinery_long')->nullable();
            $table->string('refinery_rspo')->nullable();
            $table->string('refinery_date_update')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refineries');
    }
};
