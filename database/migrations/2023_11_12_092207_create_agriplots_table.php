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
            $table->string('idMill')->nullable();
            $table->string('mill_name')->nullable();
            $table->string('ownership')->nullable();
            $table->string('subsidiary')->nullable();
            $table->string('estate')->nullable();
            $table->string('idEstate')->nullable();
            $table->string('idAgriplot')->nullable();
            $table->string('type_of_supplier')->nullable();
            $table->string('village')->nullable();
            $table->string('sub_district')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
            $table->string('country')->nullable();
            $table->string('planted_area')->nullable();
            $table->string('year_update')->nullable();
            $table->string('risk_assessment')->nullable();
            $table->string('ghg_luc')->nullable();
            $table->string('note')->nullable();
            $table->string('keterangan')->nullable();
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
