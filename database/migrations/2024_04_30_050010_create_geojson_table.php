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
        Schema::create('geojson', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subbidang_id')->constrained('subbidang');
            $table->foreignId('kecamatan_id')->constrained('kecamatan');
            $table->string('nama');
            $table->longText('file_geojson'); // geojson path
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('geojson');
    }
};
