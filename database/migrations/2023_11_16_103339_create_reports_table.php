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
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('report_id')->nullable();
            $table->date('report_shipment_date')->nullable();
            $table->string('report_shipment_vessel_no')->nullable();
            $table->string('report_origin_port')->nullable();
            $table->string('report_destination_port')->nullable();
            $table->string('report_hscode')->nullable();
            $table->string('report_volume')->nullable();
            $table->json('report_mill_eq_id')->nullable()->change;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
