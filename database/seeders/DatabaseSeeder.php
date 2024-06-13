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
            'tujuan'        => 'Gereja A',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Balasan Surat',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja A',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Proposal Pengajuan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja A',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Data Rekapan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'ABC123',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja A',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Balasan Surat',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja A',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Proposal Pengajuan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja A',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Data Rekapan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'ABC123',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja B',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Balasan Surat',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja B',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Proposal Pengajuan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja B',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Data Rekapan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'ABC123',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja B',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Balasan Surat',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja B',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Proposal Pengajuan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja B',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Data Rekapan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'ABC123',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja C',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Balasan Surat',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja C',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Proposal Pengajuan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja C',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Data Rekapan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'ABC123',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja C',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Balasan Surat',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja C',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Proposal Pengajuan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja C',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Data Rekapan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'ABC123',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja D',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Balasan Surat',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja D',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Proposal Pengajuan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja D',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Data Rekapan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'ABC123',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja D',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Balasan Surat',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja D',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Proposal Pengajuan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja D',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Data Rekapan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'ABC123',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja E',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Balasan Surat',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja E',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Proposal Pengajuan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja E',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Data Rekapan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'ABC123',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja E',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Balasan Surat',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja E',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Proposal Pengajuan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja E',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Data Rekapan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'ABC123',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja F',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Balasan Surat',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja F',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Proposal Pengajuan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja F',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Data Rekapan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'ABC123',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja F',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Balasan Surat',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja F',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Proposal Pengajuan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja F',
            'keterangan'    => 'Urgent',
            'jenis_surat'   => 'Data Rekapan',
            'path'          => null,
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);
    }
}
