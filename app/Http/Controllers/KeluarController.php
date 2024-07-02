<?php

namespace App\Http\Controllers;

use App\Models\Keluar;
use Illuminate\Http\Request;
use App\Exports\DataKeluarTable;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;
use Illuminate\Support\Facades\Storage;

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
                ->column('deskripsi')
                ->column('image', exportAs:false)
                ->column('actions', exportAs:false)
                ->paginate(15),
        ]);
    }

    public function create() {
        return view('keluar.create');
    }

    public function store(Request $request) {

        $request->validate([
            'path'     => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $image              = $request->file('path');
        $image_name         = $image->hashName();

        Storage::put("public/images", $image);

        Keluar::create([
            'nomor_surat'   => $request->nomor_surat,
            'tanggal'       => $request->tanggal,
            'tujuan'        => $request->tujuan,
            'keterangan'    => $request->keterangan,
            'jenis_surat'   => $request->jenis_surat,
            'deskripsi'     => $request->deskripsi,
            'path'          => "Storage/images/$image_name",
        ]);

        Toast::title('Data Surat Keluar Telah Dibuat')->autoDismiss(3);

        return to_route('keluar.index');
    }

    public function edit(Keluar $keluar) {
        return view('keluar.edit', [
            'keluar'   => $keluar,
        ]);
    }

    public function update(Request $request, Keluar $keluar){

        $request->validate([
            'path'     => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $filter = "Storage/images/";
        $result = str_replace($filter, "", $keluar->path);
        Storage::delete("public/images/" . $result);

        $image              = $request->file('path');
        $image_name         = $image->hashName();

        Storage::put("public/images", $image);
        
        $keluar->update([
            'nomor_surat'   => $request->nomor_surat,
            'tanggal'       => $request->tanggal,
            'tujuan'        => $request->tujuan,
            'keterangan'    => $request->keterangan,
            'jenis_surat'   => $request->jenis_surat,
            'deskripsi'     => $request->deskripsi,
            'path'          => "Storage/images/$image_name",
        ]);

        Toast::title('Data Telah Diubah')->warning()->autoDismiss(3);

        return to_route('keluar.index');
    }

    public function destroy(Keluar $keluar) {

        $filter = "Storage/images/";
        $result = str_replace($filter, "", $keluar->path);
        Storage::delete("public/images/" . $result);

        $keluar->delete();

        Toast::title('Data Surat Keluar Telah Dihapus')->danger()->autoDismiss(3);

        return to_route('keluar.index');
    }
    
    public function export(Request $request) {

        $date_start = $request->date_start;
        $date_end = $request->date_end;

        return new DataKeluarTable($date_start, $date_end);
    }
}
