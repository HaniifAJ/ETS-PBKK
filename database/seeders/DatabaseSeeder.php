<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Rekam;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Pasien::create([
            'nama' => 'Siti Nur'
        ]);

        Pasien::create([
            'nama' => 'Sugeng Slamet'
        ]);

        Dokter::create([
            'nama' => 'Agung Santoso'
        ]);

        Dokter::create([
            'nama' => 'Budi Raharja'
        ]);

        Rekam::factory(5)->create();
    }
}
