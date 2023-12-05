<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DataReferensi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(WilayahSeeder::class);
        $this->call(DataReferensiSeeder::class);
        $this->call(FaskesSeeder::class);
        $this->call(PasienSeeder::class);
        $this->call(PegawaiSeeder::class);
        $this->call(ReferensiSeeder::class);
        $this->call(RujukanSeeder::class);
        $this->call(UserSeeder::class);

    }
}
