<?php

namespace Database\Seeders;

use App\Models\pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        pegawai::create(['nip' => '001', 'nama' => 'Ragil M Rivandi', 'faskes_id' => '1', 'status' => '1']);
        pegawai::create(['nip' => '003', 'nama' => 'Nury Yati', 'faskes_id' => '2', 'status' => '1']);
        pegawai::create(['nip' => '002', 'nama' => 'Rahmat Sholeh', 'faskes_id' => '1', 'status' => '1']);
    }
}
