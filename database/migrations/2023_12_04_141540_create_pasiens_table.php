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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('norm',6);
            $table->string('namalengkap',50);
            $table->string('namapanggilan',30);
            $table->string('tempat_lahir',30);
            $table->date('tanggal_lahir');
            $table->tinyInteger('agama');
            $table->tinyInteger('perkawinan');
            $table->tinyInteger('pendidikan');
            $table->tinyInteger('pekerjaan');
            $table->tinyInteger('goldar');
            $table->text('alamat');
            $table->tinyInteger('provinsi');
            $table->tinyInteger('kabupaten');
            $table->tinyInteger('kecamatan');
            $table->tinyInteger('kelurahan');
            $table->string('rt',3);
            $table->string('rw',3);
            $table->string('kodepos',5);
            $table->foreignIdFor(Pegawai::class);
            $table->string('faskespegawai');
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
