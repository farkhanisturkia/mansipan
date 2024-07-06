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
            'deskripsi'     => 'Pagi ini, saya bangun dengan semangat dan bersemangat untuk memulai hari. Cuaca cerah membuat saya merasa bahagia dan bersemangat. Saya berencana untuk melakukan yoga pagi di taman dekat rumah.',
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
            'deskripsi'     => 'Kemarin, saya menghadiri acara ulang tahun teman di kafe favorit kami. Suasana di sana sangat ramai dan menyenangkan. Kami tertawa dan berbicara sepanjang malam. Makanan di kafe itu enak sekali.',
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
            'deskripsi'     => 'Musim panas ini, saya berencana untuk mengunjungi pantai di Pulau Bali. Saya ingin melihat matahari terbenam yang indah di pantai sambil menikmati angin laut yang segar. Liburan ini sudah lama saya nantikan.',
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
            'deskripsi'     => 'Minggu depan, saya akan menghadiri seminar tentang pengembangan diri di kota. Topiknya sangat menarik bagi saya. Saya berharap bisa belajar banyak hal baru dan bertemu dengan orang-orang inspiratif.',
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
            'deskripsi'     => 'Tahun lalu, saya berkesempatan untuk melakukan perjalanan ke Eropa. Saya mengunjungi Paris dan Roma, dua kota yang penuh sejarah dan keindahan. Pengalaman itu sungguh berkesan dan tak terlupakan bagiku.',
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
            'deskripsi'     => 'Akhir pekan lalu, saya menghabiskan waktu bersama keluarga di perkebunan buah. Udara segar dan pemandangan hijau menenangkan pikiran kami. Kami menikmati buah segar langsung dari pohon sambil bercengkrama.',
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
            'deskripsi'     => 'Bulan depan, rencananya saya akan mengikuti kursus bahasa Jepang di pusat belajar bahasa. Saya tertarik mempelajari budaya dan bahasa Jepang. Semoga bisa lancar berbicara dalam waktu singkat.',
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
            'deskripsi'     => 'Selama liburan musim panas, saya merencanakan perjalanan ke pegunungan untuk mendaki gunung tertinggi di daerah itu. Pemandangan alam yang menakjubkan dan udara sejuk akan menjadi pengalaman yang tidak terlupakan.',
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
            'deskripsi'     => 'Minggu lalu, saya mengunjungi museum seni lokal yang baru dibuka di kota. Koleksi seni di sana sangat menginspirasi dan indah. Saya juga menghadiri tur yang dipandu untuk memahami lebih dalam karya seniman.',
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
            'deskripsi'     => 'Tahun ini, saya berencana untuk memulai proyek kebun sayur di halaman belakang rumah. Saya ingin menanam berbagai jenis sayuran organik sendiri. Semoga bisa menghasilkan hasil panen yang melimpah.',
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
            'deskripsi'     => 'Hari ini, saya akan menghadiri konser musik rock favorit bersama teman-teman. Kami sudah menunggu acara ini sejak lama. Atmosfir konser yang energik pasti akan membuat kami semakin antusias.',
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
            'deskripsi'     => 'Beberapa bulan lalu, saya melakukan perjalanan bisnis ke luar negeri untuk pertemuan penting dengan klien internasional. Diskusi yang intensif menghasilkan kesepakatan yang menguntungkan bagi kedua belah pihak.',
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
            'deskripsi'     => 'Akhir tahun ini, saya merencanakan liburan keluarga ke pulau tropis yang eksotis. Kami ingin bersantai di pantai berpasir putih dan snorkeling di terumbu karang yang indah. Liburan ini akan menjadi momen istimewa.',
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
            'deskripsi'     => 'Hari ini, cuaca sangat cerah dan menyenangkan. Saya merasa bersemangat untuk melakukan petualangan ke alam terbuka. Bersama teman-teman, kami akan menjelajahi hutan dan menikmati keindahan alamnya.',
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
            'deskripsi'     => 'Bulan depan, saya akan menghadiri konferensi internasional tentang teknologi dan inovasi di kota metropolitan. Saya berharap bisa bertemu dengan para ahli dan belajar tentang perkembangan terbaru di bidang ini.',
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
            'deskripsi'     => 'Minggu lalu, saya menghabiskan waktu di pantai bersama keluarga. Kami bermain voli pantai dan berjemur di atas pasir putih. Ombak yang tenang membuat hari itu menjadi sempurna untuk bersantai.',
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
            'deskripsi'     => 'Tahun ini, saya akan merayakan ulang tahun ke-30 di rumah bersama teman-teman terdekat. Pesta kecil-kecilan dengan makanan lezat dan musik akan menjadi momen spesial untuk mengenang.',
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
            'deskripsi'     => 'Akhir pekan kemarin, saya pergi berkemah di gunung bersama komunitas hiking. Malamnya, kami berkumpul di sekitar api unggun sambil bercerita dan menikmati marshmallow panggang.',
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
            'deskripsi'     => 'Hari ini, saya mengunjungi galeri seni untuk melihat pameran lukisan terbaru. Karya-karya seniman lokal sangat menginspirasi dan memberikan perspektif baru tentang ekspresi artistik.',
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
            'deskripsi'     => 'Musim panas ini, saya berencana untuk mengunjungi danau indah di daerah pegunungan. Aktivitas renang dan piknik di tepi danau akan menjadi waktu yang menyenangkan bersama keluarga.',
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
            'deskripsi'     => 'Minggu depan, saya akan mengikuti pelatihan manajemen waktu di kantor. Saya ingin meningkatkan produktivitas dan efisiensi kerja saya dalam menangani proyek-proyek yang sedang berjalan.',
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
            'deskripsi'     => 'Akhir tahun lalu, saya menghadiri perayaan tahun baru di kota besar. Kembang api yang spektakuler dan suasana pesta membuat malam itu tidak terlupakan untuk saya dan teman-teman.',
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
            'deskripsi'     => 'Hari ini, saya berencana untuk menjelajahi kota dengan naik sepeda. Rute sepeda yang indah akan membawa saya ke tempat-tempat menarik dan memberikan pengalaman berbeda dalam menjelajah.',
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
            'deskripsi'     => 'Tahun ini, saya ingin belajar memasak masakan Thailand. Saya tertarik dengan bumbu-bumbu yang khas dan cita rasa yang eksotis dari masakan Thailand yang terkenal di seluruh dunia.',
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'ABC123',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja E',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Balasan Surat',
            'path'          => null,
            'deskripsi'     => 'Bulan depan, saya berencana untuk mengunjungi museum sejarah untuk belajar tentang peradaban kuno. Artefak-artefak bersejarah di sana pasti akan memberikan wawasan mendalam tentang masa lampau.',
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
            'deskripsi'     => 'Hari ini, saya akan mengunjungi taman binatang dengan anak-anak. Mereka sangat antusias untuk melihat berbagai binatang yang ada di sana dan belajar tentang habitat alami mereka.',
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja E',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Data Rekapan',
            'path'          => null,
            'deskripsi'     => 'Akhir pekan kemarin, saya berlibur di pantai dengan teman-teman. Kami bermain permainan air, seperti banana boat dan parasailing, yang membuat kami terhibur sepanjang hari.',
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
            'deskripsi'     => 'Musim semi ini, saya berencana untuk menanam berbagai jenis bunga di halaman belakang rumah. Saya ingin menciptakan taman bunga yang indah dan memikat dengan warna-warni bunga-bunga.',
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
            'deskripsi'     => 'Minggu depan, saya akan mengikuti workshop fotografi untuk memperdalam keterampilan memotret saya. Saya ingin mengambil gambar-gambar yang artistik dan berkesan dalam perjalanan ini.',
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
            'deskripsi'     => 'Hari ini, saya akan menghadiri acara pernikahan sahabat di gereja terdekat. Saya senang bisa menyaksikan momen istimewa mereka dan memberikan ucapan selamat yang tulus.',
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'ABC123',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja F',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Balasan Surat',
            'path'          => null,
            'deskripsi'     => 'Minggu depan, rencananya saya akan mengunjungi kakek nenek di desa. Saya merindukan kehangatan keluarga dan ingin menghabiskan waktu bersama mereka di sana.',
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
            'deskripsi'     => 'Bulan depan, saya berencana untuk mengikuti kursus memasak untuk belajar membuat hidangan khas Mediterania. Saya ingin memperluas keterampilan memasak saya dengan cita rasa baru.',
            'is_dataset'    => true,
            'is_spam'       => 1
        ]);

        Masuk::create([
            'nomor_surat'   => 'EFG456',
            'tanggal'       => Carbon::create('2000', '01', '01'),
            'tujuan'        => 'Gereja F',
            'keterangan'    => 'Regular',
            'jenis_surat'   => 'Data Rekapan',
            'path'          => null,
            'deskripsi'     => 'Tahun ini, saya akan merayakan ulang tahun dengan perjalanan solo ke pantai terpencil. Saya mencari kedamaian dan keindahan alam yang menenangkan di sana.',
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
            'deskripsi'     => 'Akhir pekan lalu, saya pergi berkemah di hutan nasional dengan kelompok hiking lokal. Mendaki gunung dan berkumpul di sekitar api unggun adalah pengalaman yang mendalam.',
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
            'deskripsi'     => 'Musim panas ini, saya berencana untuk melakukan road trip ke beberapa negara bagian di Amerika Serikat. Saya ingin menjelajahi keindahan alam dan kota-kota yang berbeda di sepanjang perjalanan.',
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
            'deskripsi'     => 'Hari ini, saya menghabiskan waktu di perpustakaan untuk membaca buku-buku tentang sejarah dunia. Saya menemukan informasi yang menarik dan menginspirasi dari buku-buku tersebut.',
            'is_dataset'    => true,
            'is_spam'       => 0
        ]);
    }
}
