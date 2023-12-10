<?php

namespace Database\Seeders;

use App\Models\DataReferensi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataReferensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DataReferensi::create(['referensi_id' => '1', 'deskripsi' => 'KTP', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '2', 'deskripsi' => 'Umum', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '2', 'deskripsi' => 'BPJS', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '2', 'deskripsi' => 'JAMPERSAL', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '3', 'deskripsi' => 'Belum Sekolah', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '4', 'deskripsi' => 'Iya', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '4', 'deskripsi' => 'Tidak', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '5', 'deskripsi' => 'Sadar', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '5', 'deskripsi' => 'Sedang', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '5', 'deskripsi' => 'Lemah', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '5', 'deskripsi' => 'Tidak Sadar', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '6', 'deskripsi' => 'Utuh', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '6', 'deskripsi' => 'Merembes', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '6', 'deskripsi' => 'Negatif', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '7', 'deskripsi' => 'Jernih', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '7', 'deskripsi' => 'Kehijauan', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '7', 'deskripsi' => 'Mokonium', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '7', 'deskripsi' => 'Darah', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '8', 'deskripsi' => 'Hodge I', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '8', 'deskripsi' => 'Hodge II', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '8', 'deskripsi' => 'Hodge III', 'status' => '1']);
        DataReferensi::create(['referensi_id' => '8', 'deskripsi' => 'Hodge IV', 'status' => '1']);
    }
}
