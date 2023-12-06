<?php

use App\Models\Pasien;
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
        Schema::create('rujukans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pasien::class);
            $table->dateTime('tanggaljam');
            $table->foreignId('jaminan')->nullable();
            $table->string('nokartu')->nullable();
            $table->char('hpht',20)->nullable();
            $table->char('gravida',3)->nullable();
            $table->char('partus',3)->nullable();
            $table->char('abortus',3)->nullable();
            $table->text('keluhan')->nullable();
            $table->char('pervaginambbmax',10)->nullable();
            $table->foreignId('indikasisc')->nullable();
            $table->char('tahunsc',4)->nullable();
            $table->foreignId('keadaanumum')->nullable();
            $table->char('td',10)->nullable();
            $table->char('nadi',10)->nullable();
            $table->char('suhu',10)->nullable();
            $table->foreignId('his')->nullable();
            $table->char('durasi',20)->nullable();
            $table->char('djj',10)->nullable();
            $table->char('tfu',10)->nullable();
            $table->char('lingkarpinggang',10)->nullable();
            $table->char('tbj',10)->nullable();
            $table->foreignId('pembukaan')->nullable();
            $table->foreignId('ketuban')->nullable();
            $table->foreignId('warnaketuban')->nullable();
            $table->char('bagianterdepan',15)->nullable();
            $table->foreignId('kepala')->nullable();
            $table->text('diagnosa')->nullable();
            $table->text('alasanmerujuk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rujukans');
    }
};
