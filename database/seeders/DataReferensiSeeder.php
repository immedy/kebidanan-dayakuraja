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
    }
}
