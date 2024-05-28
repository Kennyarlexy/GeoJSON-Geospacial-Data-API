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
        Schema::table('kecamatan', function (Blueprint $table) {
            $table->foreign('geojson_id')->references('id')->on('geojson')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kecamatan', function (Blueprint $table) {
            $table->dropForeign(['geojson_id']);
        });
    }
};
