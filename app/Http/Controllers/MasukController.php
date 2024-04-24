<?php

namespace App\Http\Controllers;

use App\Models\Masuk;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;

class MasukController extends Controller
{
    public function index() {
        return view('masuk.index', [
            'masuks' => SpladeTable::for(Masuk::class)
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
        return view('masuk.create');
    }

    public function store(Request $request) {
        Masuk::create([
            'nomor_surat'   => $request->nomor_surat,
            'tanggal'       => $request->tanggal,
            'tujuan'        => $request->tujuan,
            'keterangan'    => $request->keterangan,
            'jenis_surat'   => $request->jenis_surat,
            'path'          => $request->path,
        ]);

        Toast::title('Data Surat Masuk Telah Dibuat')->autoDismiss(3);

        return to_route('masuk.index');
    }

    public function edit(Masuk $masuk) {
        return view('masuk.edit', [
            'masuk'   => $masuk,
        ]);
    }

    public function update(Request $request, Masuk $masuk)
    {
        $masuk->update([
            'nomor_surat'   => $request->nomor_surat,
            'tanggal'       => $request->tanggal,
            'tujuan'        => $request->tujuan,
            'keterangan'    => $request->keterangan,
            'jenis_surat'   => $request->jenis_surat,
            'path'          => $request->path,
        ]);

        Toast::title('Data Telah Diubah')->warning()->autoDismiss(3);

        return to_route('masuk.index');
    }

    public function destroy(Masuk $masuk) {
        $masuk->delete();

        Toast::title('Data Surat Masuk Telah Dihapus')->danger()->autoDismiss(3);

        return to_route('masuk.index');
    }
}
