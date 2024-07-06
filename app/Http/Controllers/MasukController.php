<?php

namespace App\Http\Controllers;
require_once __DIR__.'/../../../vendor/autoload.php';

use App\Models\Masuk;
use App\Tables\masukTable;
use App\Tables\naiveTable;
use Illuminate\Http\Request;
use App\Exports\DataMasukTable;
use Maatwebsite\Excel\Facades\Excel;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;
use Illuminate\Support\Facades\Storage;

use Phpml\Metric\Accuracy;
use Phpml\Metric\ConfusionMatrix;
use Phpml\Classification\NaiveBayes;
use Phpml\FeatureExtraction\TokenCountVectorizer;
use Phpml\Tokenization\WhitespaceTokenizer;
use Sastrawi\Stemmer\StemmerFactory;

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

        $masuks = Masuk::get();
        foreach ($masuks as $value) {
            $deskripsi[] = $value->deskripsi;
            $labels[] = $value->is_spam;
        }
        $masuksTrue = Masuk::where('is_spam', 1)->get();
        foreach ($masuksTrue as $value) {
            $deskripsiTrue[] = $value->deskripsi;
            $labelsTrue[] = $value->is_spam;
        }
        $masuksFalse = Masuk::where('is_spam', 0)->get();
        foreach ($masuksFalse as $value) {
            $deskripsiFalse[] = $value->deskripsi;
            $labelsFalse[] = $value->is_spam;
        }

        $newInput = $request->deskripsi;

        $stemmerFactory = new StemmerFactory();
        $stemmer = $stemmerFactory->createStemmer();

        $tokens = explode(' ', $newInput);
        $stemmedTokens = [];
        foreach ($tokens as $token) {
            $stemmedTokens[] = $stemmer->stem($token);
        }

        $probTrue   = count($masuksTrue)/count($masuks);
        $probFalse  = count($masuksFalse)/count($masuks);

        //if is_spam true
        $kalimat_yang_mengandung_true = [];
        foreach ($deskripsiTrue as $desTrue) {
            $ditemukan = 0;
        
            foreach ($stemmedTokens as $kata) {
                if (stripos($desTrue, $kata) !== false) {
                    $ditemukan ++;
                }
            }
            
            if ($ditemukan >= 5) {
                $kalimat_yang_mengandung_true[] = $desTrue;
            }
        }
        
        $jumlah_ditemukan_true = count($kalimat_yang_mengandung_true);
        $probKataTrue = $jumlah_ditemukan_true / count($deskripsi);

        //if is_spam false
        $kalimat_yang_mengandung_false = [];
        foreach ($deskripsiFalse as $desFalse) {
            $ditemukan = 0;
        
            foreach ($stemmedTokens as $kata) {
                if (stripos($desFalse, $kata) !== false) {
                    $ditemukan ++;
                }
            }
        
            if ($ditemukan >= 5) {
                $kalimat_yang_mengandung_false[] = $desFalse;
            }
        }
        
        $jumlah_ditemukan_false = count($kalimat_yang_mengandung_false);
        $probKataFalse = $jumlah_ditemukan_false / count($deskripsi);

        $likeLiHoodTrue = $probKataTrue * $probTrue;
        $likeLiHoodFalse = $probKataFalse * $probFalse;

        if ($likeLiHoodTrue != 0 && $likeLiHoodFalse !=0) {
            $normalisasiTrue  = $likeLiHoodTrue / ($likeLiHoodTrue + $likeLiHoodFalse);
            $normalisasiFalse = $likeLiHoodFalse / ($likeLiHoodTrue + $likeLiHoodFalse);
        } else {
            $normalisasiTrue = 0;
            $normalisasiFalse = 0;
        }

        if ($normalisasiTrue > $normalisasiFalse) {
            $predictedLabel = 1;
        } else {
            $predictedLabel = 0;
        }

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
            'deskripsi'     => $request->deskripsi,
            'path'          => "Storage/images/$image_name",
            'is_spam'       => $predictedLabel,
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

        $masuks = Masuk::get();
        foreach ($masuks as $value) {
            $deskripsi[] = $value->deskripsi;
            $labels[] = $value->is_spam;
        }
        $masuksTrue = Masuk::where('is_spam', 1)->get();
        foreach ($masuksTrue as $value) {
            $deskripsiTrue[] = $value->deskripsi;
            $labelsTrue[] = $value->is_spam;
        }
        $masuksFalse = Masuk::where('is_spam', 0)->get();
        foreach ($masuksFalse as $value) {
            $deskripsiFalse[] = $value->deskripsi;
            $labelsFalse[] = $value->is_spam;
        }

        $newInput = $request->deskripsi;

        $stemmerFactory = new StemmerFactory();
        $stemmer = $stemmerFactory->createStemmer();

        $tokens = explode(' ', $newInput);
        $stemmedTokens = [];
        foreach ($tokens as $token) {
            $stemmedTokens[] = $stemmer->stem($token);
        }

        $probTrue   = count($masuksTrue)/count($masuks);
        $probFalse  = count($masuksFalse)/count($masuks);

        //if is_spam true
        $kalimat_yang_mengandung_true = [];
        foreach ($deskripsiTrue as $desTrue) {
            $ditemukan = 0;
        
            foreach ($stemmedTokens as $kata) {
                if (stripos($desTrue, $kata) !== false) {
                    $ditemukan ++;
                }
            }
            
            if ($ditemukan >= 5) {
                $kalimat_yang_mengandung_true[] = $desTrue;
            }
        }
        
        $jumlah_ditemukan_true = count($kalimat_yang_mengandung_true);
        $probKataTrue = $jumlah_ditemukan_true / count($deskripsi);

        //if is_spam false
        $kalimat_yang_mengandung_false = [];
        foreach ($deskripsiFalse as $desFalse) {
            $ditemukan = 0;
        
            foreach ($stemmedTokens as $kata) {
                if (stripos($desFalse, $kata) !== false) {
                    $ditemukan ++;
                }
            }
        
            if ($ditemukan >= 5) {
                $kalimat_yang_mengandung_false[] = $desFalse;
            }
        }

        $jumlah_ditemukan_false = count($kalimat_yang_mengandung_false);
        $probKataFalse = $jumlah_ditemukan_false / count($deskripsi);

        $likeLiHoodTrue = $probKataTrue * $probTrue;
        $likeLiHoodFalse = $probKataFalse * $probFalse;

        if ($likeLiHoodTrue != 0 && $likeLiHoodFalse !=0) {
            $normalisasiTrue  = $likeLiHoodTrue / ($likeLiHoodTrue + $likeLiHoodFalse);
            $normalisasiFalse = $likeLiHoodFalse / ($likeLiHoodTrue + $likeLiHoodFalse);
        } else {
            $normalisasiTrue = 0;
            $normalisasiFalse = 0;
        }

        if ($normalisasiTrue > $normalisasiFalse) {
            $predictedLabel = 1;
        } else {
            $predictedLabel = 0;
        }

        $request->validate([
            'path'     => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $filter = "Storage/images/";
        $result = str_replace($filter, "", $masuk->path);
        Storage::delete("public/images/" . $result);

        $image              = $request->file('path');
        $image_name         = $image->hashName();

        Storage::put("public/images", $image);

        $masuk->update([
            'nomor_surat'   => $request->nomor_surat,
            'tanggal'       => $request->tanggal,
            'tujuan'        => $request->tujuan,
            'keterangan'    => $request->keterangan,
            'jenis_surat'   => $request->jenis_surat,
            'deskripsi'     => $request->deskripsi,
            'path'          => "Storage/images/$image_name",
            'is_spam'       => $predictedLabel,
        ]);

        Toast::title('Data Telah Diubah')->warning()->autoDismiss(3);

        return to_route('masuk.index');
    }

    public function destroy(Masuk $masuk) {

        $filter = "Storage/images/";
        $result = str_replace($filter, "", $masuk->path);
        Storage::delete("public/images/" . $result);

        $masuk->delete();

        Toast::title('Data Surat Masuk Telah Dihapus')->danger()->autoDismiss(3);

        return to_route('masuk.index');
    }

    public function export(Request $request) {

        $date_start = $request->date_start;
        $date_end = $request->date_end;

        return new DataMasukTable($date_start, $date_end);

    }

    public function naive(Masuk $masuk) {
        $masuks = Masuk::where('id', "!=", $masuk->id)->where('updated_at', '<=', $masuk->updated_at)->get();
        foreach ($masuks as $value) {
            $deskripsi[] = $value->deskripsi;
            $labels[] = $value->is_spam;
        }
        $masuksTrue = Masuk::where('id', "!=", $masuk->id)->where('updated_at', '<=', $masuk->updated_at)->where('is_spam', 1)->get();
        foreach ($masuksTrue as $value) {
            $deskripsiTrue[] = $value->deskripsi;
            $labelsTrue[] = $value->is_spam;
        }
        $masuksFalse = Masuk::where('id', "!=", $masuk->id)->where('updated_at', '<=', $masuk->updated_at)->where('is_spam', 0)->get();
        foreach ($masuksFalse as $value) {
            $deskripsiFalse[] = $value->deskripsi;
            $labelsFalse[] = $value->is_spam;
        }

        $newInput = $masuk->deskripsi;

        $stemmerFactory = new StemmerFactory();
        $stemmer = $stemmerFactory->createStemmer();

        $tokens = explode(' ', $newInput);
        $stemmedTokens = [];
        foreach ($tokens as $token) {
            $stemmedTokens[] = $stemmer->stem($token);
        }
        $wordCounts = array_count_values($stemmedTokens);

        $probTrue   = count($masuksTrue)/count($masuks);
        $probFalse  = count($masuksFalse)/count($masuks);

        //if is_spam true
        $kalimat_yang_mengandung_true = [];
        foreach ($deskripsiTrue as $desTrue) {
            $ditemukan = 0;
        
            foreach ($stemmedTokens as $kata) {
                if (stripos($desTrue, $kata) !== false) {
                    $ditemukan ++;
                }
            }
            
            if ($ditemukan >= 5) {
                $kalimat_yang_mengandung_true[] = $desTrue;
            }
        }

        $jumlah_ditemukan_true = count($kalimat_yang_mengandung_true);
        $probKataTrue = $jumlah_ditemukan_true / count($deskripsi);

        //if is_spam false
        $kalimat_yang_mengandung_false = [];
        foreach ($deskripsiFalse as $desFalse) {
            $ditemukan = 0;
        
            foreach ($stemmedTokens as $kata) {
                if (stripos($desFalse, $kata) !== false) {
                    $ditemukan ++;
                }
            }
        
            if ($ditemukan >= 5) {
                $kalimat_yang_mengandung_false[] = $desFalse;
            }
        }

        $jumlah_ditemukan_false = count($kalimat_yang_mengandung_false);
        $probKataFalse = $jumlah_ditemukan_false / count($deskripsi);

        $likeLiHoodTrue = $probKataTrue * $probTrue;
        $likeLiHoodFalse = $probKataFalse * $probFalse;

        if ($likeLiHoodTrue != 0 && $likeLiHoodFalse !=0) {
            $normalisasiTrue  = $likeLiHoodTrue / ($likeLiHoodTrue + $likeLiHoodFalse);
            $normalisasiFalse = $likeLiHoodFalse / ($likeLiHoodTrue + $likeLiHoodFalse);
        } else {
            $normalisasiTrue = 0;
            $normalisasiFalse = 0;
        }

        $stemmedInput[] = implode(' ', $stemmedTokens);

        $vectorizer = new TokenCountVectorizer(new WhitespaceTokenizer());
        $vectorizer->fit($deskripsi); 
        $vectorizer->transform($deskripsi);
        $vectorizer->transform($stemmedInput);

        $classifier = new NaiveBayes();
        $classifier->train($deskripsi, $labels);
        $predictedLabel = $classifier->predict($stemmedInput);

        return view('masuk.naive', [
            'is_spam'           => $masuk->is_spam,
            'newInput'          => $newInput,
            'stemmedTokens'     => $stemmedTokens,
            'wordCounts'        => $wordCounts,
            'stemmedInput'      => $stemmedInput,
            'predictedLabel'    => $predictedLabel,
            'probTrue'          => $probTrue,
            'probFalse'         => $probFalse,
            'kalimat_yang_mengandung_true'   => $kalimat_yang_mengandung_true,
            'jumlah_ditemukan_true'          => $jumlah_ditemukan_true,
            'kalimat_yang_mengandung_false'  => $kalimat_yang_mengandung_false,
            'jumlah_ditemukan_false'         => $jumlah_ditemukan_false,
            'likeLiHoodTrue'      => $likeLiHoodTrue,
            'likeLiHoodFalse'     => $likeLiHoodFalse,
            'normalisasiTrue'   => $normalisasiTrue,
            'normalisasiFalse'  => $normalisasiFalse,
        ]);
    }
}
