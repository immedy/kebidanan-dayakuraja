<?php

namespace Database\Seeders;

use App\Models\faskes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaskesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        faskes::create(['nofaskes' => '12345', 'nofaskesbpjs' => '12345', 'nama' => 'RSUD Dayaku Raja', 'alamat' => 'Jalan Poros Kota Bangun Tenggarong KM5', 'status' => '1']);
        faskes::create(['nofaskes' => '00001', 'nofaskesbpjs' => '00001', 'nama' => 'Puskesmas Kota Bangun', 'alamat' => 'Jalan Pelabuhan Kota Bangun', 'status' => '1']);
    }
}
