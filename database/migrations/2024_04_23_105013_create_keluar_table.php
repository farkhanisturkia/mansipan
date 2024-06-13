<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('keluars', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat')->nullable();
            $table->date('tanggal')->nullable();
            $table->enum('tujuan', ['Gereja A', 'Gereja B', 'Gereja C', 'Gereja D', 'Gereja E', 'Gereja F'])->nullable();
            $table->enum('keterangan', ['Regular', 'Urgent'])->nullable();
            $table->enum('jenis_surat', ['Balasan Surat', 'Proposal Pengajuan', 'Data Rekapan'])->nullable();
            $table->string('path')->default(null)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluar');
    }
};
