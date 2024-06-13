<?php

namespace App\Exports;

use App\Models\Masuk;
use Maatwebsite\Excel\Excel;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataMasukTable implements FromQuery, WithHeadings, Responsable
{
    use Exportable;

    protected $date_start;
    protected $date_end;

    private $writerType = Excel::XLSX;
    private $fileName = 'dataSuratMasuk.xlsx';

    function __construct($date_start,$date_end) {
        $this->date_start = $date_start;
        $this->date_end = $date_end;
    }
    
    public function query()
    {
        
        $data = DB::table('masuks')
            ->whereBetween('tanggal',[ $this->date_start, $this->date_end])
            ->select('nomor_surat', 'tanggal', 'tujuan', 'keterangan', 'jenis_surat')
            ->orderBy('id');
        
        return $data;
    }
    
    public function headings(): array {
        return [
            'nomor_surat',
            'tanggal',
            'tujuan',
            'keterangan',
            'jenis_surat',
        ];
    }
}
