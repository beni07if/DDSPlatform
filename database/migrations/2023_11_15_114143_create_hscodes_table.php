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
        Schema::create('hscodes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hs_code_bps')->nullable();
            $table->string('hs_code_pmk')->nullable();
            $table->string('hs_code_panjiva')->nullable();
            $table->string('hs_code_eu')->nullable();
            $table->string('product_bps')->nullable();
            $table->string('product_pmk')->nullable();
            $table->string('product_panjiva')->nullable();
            $table->string('product_eu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hscodes');
    }
};
