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
        Schema::create('wilayahs', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->tinyInteger('JENIS')->index('JENIS');
            $table->string('DESKRIPSI', 50)->index('DESKRIPSI');
            $table->boolean('KOTA')->default(0);
            $table->boolean('STATUS')->default(1)->index('STATUS');
            $table->boolean('REMOTE_CHANGE')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wilayahs');
    }
};
