<?php

namespace App\Http\Controllers;

use App\Models\Keluar;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;

class KeluarController extends Controller
{
    public function index() {
        return view('keluar.index', [
            'keluars' => SpladeTable::for(Keluar::class)
                ->column('nomor_surat')
                ->column('tanggal')
                ->column('tujuan')
                ->column('keterangan')
                ->column('jenis_surat')
                ->column('path')
                ->column('actions')
                ->paginate(15),
        ]);
    }

    public function create() {
        return view('keluar.create');
    }

    public function store(Request $request) {
        Keluar::create([
            'nomor_surat'   => $request->nomor_surat,
            'tanggal'       => $request->tanggal,
            'tujuan'        => $request->tujuan,
            'keterangan'    => $request->keterangan,
            'jenis_surat'   => $request->jenis_surat,
            'path'          => null,
        ]);

        Toast::title('Data Surat Keluar Telah Dibuat')->autoDismiss(3);

        return to_route('keluar.index');
    }

    public function destroy(Keluar $keluar) {
        $keluar->delete();

        Toast::title('Data Surat Keluar Telah Dihapus')->danger()->autoDismiss(3);

        return to_route('keluar.index');
    }
}
