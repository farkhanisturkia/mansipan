<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_surat',
        'tanggal',
        'tujuan',
        'keterangan',
        'jenis_surat',
        'deskripsi',
        'path',
    ];
}
