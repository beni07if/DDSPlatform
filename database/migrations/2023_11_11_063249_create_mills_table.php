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
        Schema::create('mills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idMill')->nullable();
            $table->string('idUml')->nullable();
            $table->string('mill_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('idGroup')->nullable();
            $table->string('group_name')->nullable();
            $table->string('mill_type')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->string('address')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('supplier_check')->nullable();
            $table->string('capacity')->nullable();
            $table->string('rspo_certified')->nullable();
            $table->string('other_certified')->nullable();
            $table->string('ndpe')->nullable();
            $table->string('pko_supplier')->nullable();
            $table->string('methane_capture')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mills');
    }
};
