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
            $table->string('idFacility')->nullable();
            $table->string('facility_name')->nullable();
            $table->string('idGroup')->nullable();
            $table->string('group_name')->nullable();
            $table->string('facility_type')->nullable();
            $table->string('supplier_check')->nullable();
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('address')->nullable();
            $table->string('volume_handle')->nullable();
            $table->string('rspoCertified')->nullable();
            $table->string('verified')->nullable();
            $table->string('check')->nullable();
            $table->string('check_verified_data_consolidation')->nullable();
            $table->string('other_certification')->nullable();
            $table->string('ttm_available')->nullable();
            $table->string('idUml')->nullable();
            $table->string('note')->nullable();
            $table->string('image')->nullable();
            $table->string('rspo_sccs')->nullable();
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
