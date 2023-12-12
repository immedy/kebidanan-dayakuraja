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
        Schema::table('rujukans', function (Blueprint $table) {
            $table->string('usiakandungan')->after('abortus');
            $table->string('berat')->after('usiakandungan');
            $table->string('ri')->after('nadi');
            $table->char('terapi')->after('kepala');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rujukans', function (Blueprint $table) {
            //
        });
    }
};
