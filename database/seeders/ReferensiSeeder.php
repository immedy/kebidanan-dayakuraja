<?php

namespace Database\Seeders;

use App\Models\referensi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReferensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        referensi::create(['referensi' => 'Kartu Identitas']);
        referensi::create(['referensi' => 'Jaminan Kesehatan']);
        referensi::create(['referensi' => 'Pendidikan']);
    }
}
