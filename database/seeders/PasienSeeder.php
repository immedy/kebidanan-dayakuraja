<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Pasien::create([
            'noidentitas' => '66', 'jenis_identitas' => '3', 'norm' => '321', 'namalengkap' => 'Michele Jade', 'namapanggilan' => 'Michele', 'tempat_lahir' => 'Tokyo', 'tanggal_lahir' => '1987-04-16', 'agama' => '142', 'perkawinan' => '24', 'pendidikan' => '27', 'pekerjaan' => '38', 'goldar' => '129', 'alamat' => 'JL Akasia', 'provinsi' => '64', 'kabupaten' => '6472', 'kecamatan' => '647209', 'kelurahan' => '6472091003', 'rt' => '1', 'rw' => '2', 'kodepos' => '321', 'pegawai_id' => '1', 'faskespegawai' => '1', 'status' => '1',
        ]);
    }
}
