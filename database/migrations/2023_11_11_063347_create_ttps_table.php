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
            $table->string('ttp_eq_id');
            $table->string('mill_eq_id');
            $table->string('mill_uml_id');
            $table->string('mill_name');
            $table->string('agriplot_eq_id');
            $table->string('agriplot_type');
            $table->string('agriplot_estate_name_id');
            $table->string('agriplot_estate_name');
            $table->string('ttp_source_type');
            $table->string('ttp_year_period');
            $table->string('ttp_date_update');
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
