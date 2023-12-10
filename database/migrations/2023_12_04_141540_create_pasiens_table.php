<?php

use App\Models\pegawai;
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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('noidentitas')->nullable();
            $table->foreignId('jenis_identitas')->nullable();
            $table->string('norm',6)->nullable();
            $table->string('namalengkap',50);
            $table->string('namapanggilan',30)->nullable();
            $table->string('tempat_lahir',30);
            $table->date('tanggal_lahir');
            $table->foreignId('agama')->nullable();
            $table->foreignId('perkawinan')->nullable();
            $table->foreignId('pendidikan')->nullable();
            $table->foreignId('pekerjaan')->nullable();
            $table->foreignId('goldar')->nullable();
            $table->text('alamat');
            $table->char('provinsi',30);
            $table->char('kabupaten',30);
            $table->char('kecamatan',30);
            $table->char('kelurahan',30);
            $table->string('rt',3)->nullable();
            $table->string('rw',3)->nullable();
            $table->string('kodepos',5)->nullable();
            $table->foreignIdFor(pegawai::class)->nullable();
            $table->foreignId('faskespegawai')->nullable();
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
