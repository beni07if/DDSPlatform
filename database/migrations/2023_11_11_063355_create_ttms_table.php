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
        Schema::create('ttms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idGroupF');
            $table->string('groupF');
            $table->string('idFacility');
            $table->string('facility_name');
            $table->string('tahun');
            $table->string('period');
            $table->string('facility');
            $table->string('idMill');
            $table->string('idUml');
            $table->string('mill_name');
            $table->string('company_name');
            $table->string('idGroupM');
            $table->string('groupM');
            $table->string('country');
            $table->string('province');
            $table->string('district');
            $table->string('address');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('mill_type');
            $table->string('rspo_certified');
            $table->string('other_certified');
            $table->string('capacity');
            $table->string('ttp');
            $table->string('methane_capture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttms');
    }
};
