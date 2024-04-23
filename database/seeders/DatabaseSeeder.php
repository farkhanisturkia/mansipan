<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Masuk;
use App\Models\Keluar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'user',
            'email' => 'test@example.com',
            'password' => Hash::make('password')
        ]);

        Masuk::create([
            'nomor_surat'   => 'ABC123',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gedung DPRD Surabaya',
            'keterangan'    => 'Harap dibalas secepatnya',
            'jenis_surat'   => 'Rahasia',
            'path'          => null
        ]);

        Keluar::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gedung Medan Surabaya',
            'keterangan'    => 'Permohonan maaf',
            'jenis_surat'   => 'Rahasia',
            'path'          => null
        ]);
    }
}
