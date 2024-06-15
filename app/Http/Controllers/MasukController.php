<?php

namespace App\Http\Controllers;

use App\Models\Masuk;
use App\Tables\masukTable;
use Illuminate\Http\Request;
use App\Exports\DataMasukTable;
use Maatwebsite\Excel\Facades\Excel;
use Phpml\Classification\NaiveBayes;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;
use Illuminate\Support\Facades\Storage;

class MasukController extends Controller
{
    public function index() {
        return view('masuk.index', [
            'masuks' => masukTable::class
        ]);
    }

    public function create() {
        return view('masuk.create');
    }

    public function store(Request $request) {

        $datas = Masuk::get();

        $samples = [];
        $labels = [];

        foreach ($datas as $data) {

            switch ($data->tujuan) {
                case 'Gereja A':
                    $code_t = 1;
                    break;
                case 'Gereja B':
                    $code_t = 2;
                    break;
                case 'Gereja C':
                    $code_t = 3;
                    break;
                case 'Gereja D':
                    $code_t = 4;
                    break;
                case 'Gereja E':
                    $code_t = 5;
                    break;
                case 'Gereja F':
                    $code_t = 6;
                    break;
            }

            switch ($data->keterangan) {
                case 'Regular':
                    $code_k = 1;
                    break;
                case 'Urgent':
                    $code_k = 2;
                    break;
            }

            switch ($data->jenis_surat) {
                case 'Balasan Surat':
                    $code_j = 1;
                    break;
                case 'Proposal Pengajuan':
                    $code_j = 2;
                    break;
                case 'Data Rekapan':
                    $code_j = 3;
                    break;
            }

            $samples[] = [$code_t, $code_k, $code_j];
            $labels[] = $data->is_spam;
        }

        $classifier = new NaiveBayes();
        $classifier->train($samples, $labels);

        switch ($request->tujuan) {
            case 'Gereja A':
                $code_t = 1;
                break;
            case 'Gereja B':
                $code_t = 2;
                break;
            case 'Gereja C':
                $code_t = 3;
                break;
            case 'Gereja D':
                $code_t = 4;
                break;
            case 'Gereja E':
                $code_t = 5;
                break;
            case 'Gereja F':
                $code_t = 6;
                break;
        }

        switch ($request->keterangan) {
            case 'Regular':
                $code_k = 1;
                break;
            case 'Urgent':
                $code_k = 2;
                break;
        }

        switch ($request->jenis_surat) {
            case 'Balasan Surat':
                $code_j = 1;
                break;
            case 'Proposal Pengajuan':
                $code_j = 2;
                break;
            case 'Data Rekapan':
                $code_j = 3;
                break;
        }

        $prediksiSpam = $classifier->predict([$code_t, $code_k, $code_j]);

        $request->validate([
            'path'     => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $image              = $request->file('path');
        $image_name         = $image->hashName();

        Storage::put("public/images", $image);

        Masuk::create([
            'nomor_surat'   => $request->nomor_surat,
            'tanggal'       => $request->tanggal,
            'tujuan'        => $request->tujuan,
            'keterangan'    => $request->keterangan,
            'jenis_surat'   => $request->jenis_surat,
            'path'          => "Storage/images/$image_name",
            'is_spam'       => $prediksiSpam,
        ]);

        Toast::title('Data Surat Masuk Telah Dibuat')->autoDismiss(3);

        return to_route('masuk.index');
    }

    public function edit(Masuk $masuk) {
        return view('masuk.edit', [
            'masuk'   => $masuk,
        ]);
    }

    public function update(Request $request, Masuk $masuk){

        $datas = Masuk::get();

        $samples = [];
        $labels = [];

        foreach ($datas as $data) {

            switch ($data->tujuan) {
                case 'Gereja A':
                    $code_t = 1;
                    break;
                case 'Gereja B':
                    $code_t = 2;
                    break;
                case 'Gereja C':
                    $code_t = 3;
                    break;
                case 'Gereja D':
                    $code_t = 4;
                    break;
                case 'Gereja E':
                    $code_t = 5;
                    break;
                case 'Gereja F':
                    $code_t = 6;
                    break;
            }

            switch ($data->keterangan) {
                case 'Regular':
                    $code_k = 1;
                    break;
                case 'Urgent':
                    $code_k = 2;
                    break;
            }

            switch ($data->jenis_surat) {
                case 'Balasan Surat':
                    $code_j = 1;
                    break;
                case 'Proposal Pengajuan':
                    $code_j = 2;
                    break;
                case 'Data Rekapan':
                    $code_j = 3;
                    break;
            }

            $samples[] = [$code_t, $code_k, $code_j];
            $labels[] = $data->is_spam;
        }

        $classifier = new NaiveBayes();
        $classifier->train($samples, $labels);

        switch ($request->tujuan) {
            case 'Gereja A':
                $code_t = 1;
                break;
            case 'Gereja B':
                $code_t = 2;
                break;
            case 'Gereja C':
                $code_t = 3;
                break;
            case 'Gereja D':
                $code_t = 4;
                break;
            case 'Gereja E':
                $code_t = 5;
                break;
            case 'Gereja F':
                $code_t = 6;
                break;
        }

        switch ($request->keterangan) {
            case 'Regular':
                $code_k = 1;
                break;
            case 'Urgent':
                $code_k = 2;
                break;
        }

        switch ($request->jenis_surat) {
            case 'Balasan Surat':
                $code_j = 1;
                break;
            case 'Proposal Pengajuan':
                $code_j = 2;
                break;
            case 'Data Rekapan':
                $code_j = 3;
                break;
        }

        $prediksiSpam = $classifier->predict([$code_t, $code_k, $code_j]);

        $request->validate([
            'path'     => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $image              = $request->file('path');
        $image_name         = $image->hashName();

        Storage::put("public/images", $image);

        $masuk->update([
            'nomor_surat'   => $request->nomor_surat,
            'tanggal'       => $request->tanggal,
            'tujuan'        => $request->tujuan,
            'keterangan'    => $request->keterangan,
            'jenis_surat'   => $request->jenis_surat,
            'path'          => "Storage/images/$image_name",
            'is_spam'       => $prediksiSpam,
        ]);

        Toast::title('Data Telah Diubah')->warning()->autoDismiss(3);

        return to_route('masuk.index');
    }

    public function destroy(Masuk $masuk) {
        $masuk->delete();

        Toast::title('Data Surat Masuk Telah Dihapus')->danger()->autoDismiss(3);

        return to_route('masuk.index');
    }

    public function export(Request $request) {

        $date_start = $request->date_start;
        $date_end = $request->date_end;

        return new DataMasukTable($date_start, $date_end);

    }
}
