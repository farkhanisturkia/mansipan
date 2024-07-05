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
            'deskripsi'     => 'Balasan Atas Undangan Ibadah Gabungan: Menyatakan rasa terima kasih atas undangan, mengabarkan kesediaan untuk hadir, dan menyampaikan informasi terkait jumlah peserta dan kebutuhan logistik.',
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
            'deskripsi'     => 'Proposal Pengajuan Renovasi Gereja: Menguraikan kondisi bangunan gereja yang perlu direnovasi, menjelaskan manfaat renovasi, merinci anggaran yang dibutuhkan, dan menyertakan desain dan gambar renovasi.',
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
            'deskripsi'          => 'Rekapan Kehadiran Ibadah: Menyajikan data jumlah jemaat yang hadir dalam ibadah selama periode tertentu, diklasifikasikan berdasarkan usia, jenis kelamin, dan kelompok usia.',
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
            'deskripsi'     => 'Balasan Atas Surat Permohonan Bantuan: Menyatakan rasa empati atas kondisi yang dihadapi, menginformasikan bentuk bantuan yang dapat diberikan, dan menjelaskan mekanisme penyaluran bantuan.',
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
            'deskripsi'     => 'Proposal Pengajuan Pembinaan Remaja: Menjelaskan latar belakang perlunya pembinaan remaja, merumuskan tujuan dan sasaran pembinaan, memaparkan program kegiatan pembinaan, dan merinci anggaran yang dibutuhkan.',
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
            'deskripsi'     => 'Rekapan Koleksi Dana Persembahan: Menyajikan data jumlah dana persembahan yang dikumpulkan dalam ibadah selama periode tertentu, diklasifikasikan berdasarkan jenis ibadah dan sumber dana.',
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
            'deskripsi'     => 'Balasan Atas Surat Pemberitahuan Ibadah Natal: Mengabarkan kesediaan untuk berpartisipasi dalam ibadah Natal, dan menyampaikan informasi terkait paduan suara, dekorasi, dan konsumsi.',
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
            'deskripsi'     => 'Proposal Pengajuan Perayaan Hari Raya: Menguraikan makna dan sejarah hari raya, menjelaskan rencana perayaan, merinci anggaran yang dibutuhkan, dan menyertakan daftar panitia dan susunan acara.',
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
            'deskripsi'     => 'Rekapan Kegiatan Gereja: Menyajikan data jenis kegiatan gereja yang dilaksanakan selama periode tertentu, jumlah peserta, dan anggaran yang digunakan.',
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
            'deskripsi'     => 'Balasan Atas Surat Permohonan Doa: Menyatakan dukungan dan doa untuk kebutuhan yang disampaikan, dan menginformasikan waktu doa bersama yang dapat diikuti.',
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
            'deskripsi'     => 'Proposal Pengajuan Beasiswa Pendidikan: Menjelaskan latar belakang perlunya beasiswa, merumuskan syarat dan ketentuan penerima beasiswa, memaparkan mekanisme seleksi, dan merinci anggaran yang dibutuhkan.',
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
            'deskripsi'     => 'Rekapan Anggota Jemaat: Menyajikan data jumlah anggota jemaat berdasarkan usia, jenis kelamin, dan kelompok usia, serta informasi alamat dan kontak.',
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
            'deskripsi'     => 'Balasan Atas Surat Pemberitahuan Seminar: Mengabarkan kesediaan untuk menghadiri seminar, dan menyampaikan informasi terkait jumlah peserta dan kebutuhan akomodasi.',
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
            'deskripsi'     => 'Proposal Pengajuan Pendirian Perpustakaan: Menjelaskan manfaat pendirian perpustakaan, merumuskan tujuan dan sasaran perpustakaan, memaparkan program pengelolaan perpustakaan, dan merinci anggaran yang dibutuhkan.',
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
            'deskripsi'     => 'Rekapan Pelayanan Rohani: Menyajikan data jenis pelayanan rohani yang dilakukan, jumlah penerima pelayanan, dan dampak pelayanan.',
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
            'deskripsi'     => 'Balasan Atas Permohonan Bantuan Korban Bencana Alam: Menyatakan rasa duka cita atas bencana alam yang terjadi, menginformasikan bentuk bantuan yang telah disalurkan, dan menyampaikan rencana penyaluran bantuan selanjutnya.',
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
            'deskripsi'     => 'Proposal Pengajuan Perjalanan Misi: Menjelaskan tujuan perjalanan misi, merumuskan program kegiatan misi, memaparkan anggaran yang dibutuhkan, dan menyertakan daftar peserta dan jadwal perjalanan.',
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
            'deskripsi'     => 'Rekapan Hasil Pembinaan Remaja: Menyajikan data kemajuan remaja dalam aspek spiritual, moral, dan sosial, diklasifikasikan berdasarkan jenis kegiatan dan indikator keberhasilan.',
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
            'deskripsi'     => 'Balasan Atas Undangan Ibadah Paskah: Menyatakan rasa terima kasih atas undangan, mengabarkan kesediaan untuk hadir bersama paduan suara gereja, dan menyampaikan informasi terkait kebutuhan akomodasi.',
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
            'deskripsi'     => 'Proposal Pengajuan Peningkatan Kesejahteraan Guru Agama: Menjelaskan kondisi kesejahteraan guru agama yang perlu ditingkatkan, merumuskan program peningkatan kesejahteraan, memaparkan anggaran yang dibutuhkan, dan menyertakan data pendukung.',
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
            'deskripsi'     => 'Rekapan Penggunaan Dana Persembahan: Menyajikan data penggunaan dana persembahan berdasarkan jenis kegiatan dan program gereja, dilengkapi dengan bukti kwitansi dan laporan keuangan.',
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
            'deskripsi'     => 'Balasan Atas Surat Edaran Tentang Protokol Kesehatan: Menyatakan komitmen untuk menerapkan protokol kesehatan dalam kegiatan gereja, dan menginformasikan langkah-langkah pencegahan yang telah dilakukan.',
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
            'deskripsi'     => 'Proposal Pengajuan Pendirian Klinik Kesehatan: Menjelaskan manfaat pendirian klinik kesehatan, merumuskan tujuan dan sasaran klinik, memaparkan program layanan kesehatan, dan merinci anggaran yang dibutuhkan.',
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
            'deskripsi'     => 'Rekapan Peserta Kursus Alkitab: Menyajikan data jumlah peserta kursus Alkitab berdasarkan jenis kursus, tingkat pendidikan, dan usia, dilengkapi dengan informasi kehadiran dan nilai ujian.',
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
            'deskripsi'     => 'Balasan Atas Undangan Seminar Pembinaan Rohani: Mengabarkan kesediaan untuk menghadiri seminar, dan menyampaikan informasi terkait pembicara dan materi seminar.',
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
            'deskripsi'     => 'Proposal Pengajuan Program Pemberdayaan Ekonomi Umat: Menjelaskan latar belakang perlunya program pemberdayaan ekonomi, merumuskan tujuan dan sasaran program, memaparkan program pelatihan dan pendampingan, dan merinci anggaran yang dibutuhkan.',
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
            'deskripsi'     => 'Rekapan Kunjungan Pastoral: Menyajikan data jumlah kunjungan pastoral, jenis masalah yang dihadapi jemaat, dan solusi yang diberikan, dilengkapi dengan dokumentasi foto dan catatan kunjungan.',
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
            'deskripsi'     => 'Balasan Atas Surat Permohonan Dukungan Moral: Menyatakan dukungan moral dan doa untuk situasi yang dihadapi, dan menawarkan bantuan pendampingan psikologis jika diperlukan.',
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
            'deskripsi'     => 'Proposal Pengajuan Pertukaran Budaya Antar Gereja: Menjelaskan tujuan pertukaran budaya, merumuskan program kegiatan pertukaran budaya, memaparkan anggaran yang dibutuhkan, dan menyertakan daftar peserta dan jadwal kegiatan.',
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
            'deskripsi'     => 'Rekapan Donasi dan Sponsorship: Menyajikan data jumlah donasi dan sponsorship yang diterima dari berbagai pihak, diklasifikasikan berdasarkan sumber donasi dan jenis kegiatan yang disponsori.',
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
            'deskripsi'     => 'Balasan Atas Permohonan Rekomendasi Beasiswa: Menyatakan dukungan atas permohonan beasiswa, menjelaskan prestasi dan potensi calon penerima, dan melampirkan surat rekomendasi resmi dari pimpinan gereja.',
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
            'deskripsi'     => 'Proposal Pengajuan Pembangunan Panti Asuhan: Menjelaskan kondisi dan kebutuhan anak-anak yatim piatu, merumuskan tujuan dan sasaran panti asuhan, memaparkan program pengasuhan dan pendidikan, dan merinci anggaran yang dibutuhkan.',
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
            'deskripsi'          => 'Rekapan Hasil Pendampingan Korban Kekerasan Dalam Rumah Tangga: Menyajikan data jumlah korban yang didampingi, jenis kekerasan yang dialami, dan intervensi yang diberikan, dilengkapi dengan dokumentasi foto dan catatan pendampingan.',
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
            'deskripsi'     => 'Balasan Atas Undangan Konsultasi Hukum Gereja: Mengabarkan kesediaan untuk menghadiri konsultasi, menjelaskan tim hukum yang akan terlibat, dan menyampaikan informasi terkait waktu dan lokasi konsultasi.',
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
            'deskripsi'     => 'Proposal Pengajuan Program Rehabilitasi Narkoba: Menjelaskan latar belakang maraknya penyalahgunaan narkoba di kalangan remaja, merumuskan tujuan dan sasaran program rehabilitasi, memaparkan program pemulihan dan konseling, dan merinci anggaran yang dibutuhkan.',
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
            'deskripsi'     => 'Rekapan Distribusi Bantuan Bencana Alam: Menyajikan data jenis bantuan yang didistribusikan, jumlah penerima bantuan, dan wilayah distribusi, dilengkapi dengan foto dokumentasi dan bukti penerimaan bantuan.',
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);
    }
}
