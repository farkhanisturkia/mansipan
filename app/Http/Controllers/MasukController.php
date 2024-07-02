<?php

namespace App\Http\Controllers;

use App\Models\Masuk;
use App\Tables\masukTable;
use App\Tables\naiveTable;
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
            'deskripsi'     => $request->deskripsi,
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
            'is_spam'       => $prediksiSpam,
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
        $count = count(Masuk::get());
        $count_true = count(Masuk::where('is_spam', true)->get());
        $count_false = count(Masuk::where('is_spam', false)->get());

        $count_tat = count(Masuk::where('tujuan', 'Gereja A')->where('is_spam', true)->get());
        $count_tbt = count(Masuk::where('tujuan', 'Gereja B')->where('is_spam', true)->get());
        $count_tct = count(Masuk::where('tujuan', 'Gereja C')->where('is_spam', true)->get());
        $count_tdt = count(Masuk::where('tujuan', 'Gereja D')->where('is_spam', true)->get());
        $count_tet = count(Masuk::where('tujuan', 'Gereja E')->where('is_spam', true)->get());
        $count_tft = count(Masuk::where('tujuan', 'Gereja F')->where('is_spam', true)->get());
        $count_taf = count(Masuk::where('tujuan', 'Gereja A')->where('is_spam', false)->get());
        $count_tbf = count(Masuk::where('tujuan', 'Gereja B')->where('is_spam', false)->get());
        $count_tcf = count(Masuk::where('tujuan', 'Gereja C')->where('is_spam', false)->get());
        $count_tdf = count(Masuk::where('tujuan', 'Gereja D')->where('is_spam', false)->get());
        $count_tef = count(Masuk::where('tujuan', 'Gereja E')->where('is_spam', false)->get());
        $count_tff = count(Masuk::where('tujuan', 'Gereja F')->where('is_spam', false)->get());
        $total_tt    = $count_tat + $count_tbt + $count_tct + $count_tdt + $count_tet + $count_tft;
        $p_total_tt  = $total_tt / $count_true;
        $total_tf    = $count_taf + $count_tbf + $count_tcf + $count_tdf + $count_tef + $count_tff;
        $p_total_tf  = $total_tf / $count_false;

        $count_krt = count(Masuk::where('keterangan', 'Regular')->where('is_spam', true)->get());
        $count_kut = count(Masuk::where('keterangan', 'Urgent')->where('is_spam', true)->get());
        $count_krf = count(Masuk::where('keterangan', 'Regular')->where('is_spam', false)->get());
        $count_kuf = count(Masuk::where('keterangan', 'Urgent')->where('is_spam', false)->get());
        $total_kt    = $count_krt + $count_kut;
        $p_total_kt  = $total_kt / $count_true;
        $total_kf    = $count_krf + $count_kuf;
        $p_total_kf  = $total_kf / $count_false;

        $count_jbt = count(Masuk::where('jenis_surat', 'Balasan Surat')->where('is_spam', true)->get());
        $count_jpt = count(Masuk::where('jenis_surat', 'Proposal Pengajuan')->where('is_spam', true)->get());
        $count_jdt = count(Masuk::where('jenis_surat', 'Data Rekapan')->where('is_spam', true)->get());
        $count_jbf = count(Masuk::where('jenis_surat', 'Balasan Surat')->where('is_spam', false)->get());
        $count_jpf = count(Masuk::where('jenis_surat', 'Proposal Pengajuan')->where('is_spam', false)->get());
        $count_jdf = count(Masuk::where('jenis_surat', 'Data Rekapan')->where('is_spam', false)->get());
        $total_jt    = $count_jbt + $count_jpt + $count_jdt;
        $p_total_jt  = $total_jt / $count_true;
        $total_jf    = $count_jbf + $count_jpf + $count_jdf;
        $p_total_jf  = $total_jf / $count_false;

        $p_tat = $count_tat / $count_true;
        $p_taf = $count_taf / $count_false;
        $p_tbt = $count_tbt / $count_true;
        $p_tbf = $count_tbf / $count_false;
        $p_tct = $count_tct / $count_true;
        $p_tcf = $count_tcf / $count_false;
        $p_tdt = $count_tdt / $count_true;
        $p_tdf = $count_tdf / $count_false;
        $p_tet = $count_tet / $count_true;
        $p_tef = $count_tef / $count_false;
        $p_tft = $count_tft / $count_true;
        $p_tff = $count_tff / $count_false;

        $p_krt = $count_krt / $count_true;
        $p_krf = $count_krf / $count_false;
        $p_kut = $count_kut / $count_true;
        $p_kuf = $count_kuf / $count_false;

        $p_jbt = $count_jbt / $count_true;
        $p_jbf = $count_jbf / $count_false;
        $p_jpt = $count_jpt / $count_true;
        $p_jpf = $count_jpf / $count_false;
        $p_jdt = $count_jdt / $count_true;
        $p_jdf = $count_jdf / $count_false;

        $p_true    = $count_true / $count;
        $p_false   = $count_false / $count;
        $total     = $count_true + $count_false;
        $p_total   = $total / $count;

        $arbt      = $p_tat * $p_krt * $p_jbt * $p_true;
        $arpt      = $p_tat * $p_krt * $p_jpt * $p_true;
        $ardt      = $p_tat * $p_krt * $p_jdt * $p_true;
        $aubt      = $p_tat * $p_kut * $p_jbt * $p_true;
        $aupt      = $p_tat * $p_kut * $p_jpt * $p_true;
        $audt      = $p_tat * $p_kut * $p_jdt * $p_true;

        $brbt      = $p_tbt * $p_krt * $p_jbt * $p_true;
        $brpt      = $p_tbt * $p_krt * $p_jpt * $p_true;
        $brdt      = $p_tbt * $p_krt * $p_jdt * $p_true;
        $bubt      = $p_tbt * $p_kut * $p_jbt * $p_true;
        $bupt      = $p_tbt * $p_kut * $p_jpt * $p_true;
        $budt      = $p_tbt * $p_kut * $p_jdt * $p_true;

        $crbt      = $p_tct * $p_krt * $p_jbt * $p_true;
        $crpt      = $p_tct * $p_krt * $p_jpt * $p_true;
        $crdt      = $p_tct * $p_krt * $p_jdt * $p_true;
        $cubt      = $p_tct * $p_kut * $p_jbt * $p_true;
        $cupt      = $p_tct * $p_kut * $p_jpt * $p_true;
        $cudt      = $p_tct * $p_kut * $p_jdt * $p_true;

        $drbt      = $p_tdt * $p_krt * $p_jbt * $p_true;
        $drpt      = $p_tdt * $p_krt * $p_jpt * $p_true;
        $drdt      = $p_tdt * $p_krt * $p_jdt * $p_true;
        $dubt      = $p_tdt * $p_kut * $p_jbt * $p_true;
        $dupt      = $p_tdt * $p_kut * $p_jpt * $p_true;
        $dudt      = $p_tdt * $p_kut * $p_jdt * $p_true;

        $erbt      = $p_tet * $p_krt * $p_jbt * $p_true;
        $erpt      = $p_tet * $p_krt * $p_jpt * $p_true;
        $erdt      = $p_tet * $p_krt * $p_jdt * $p_true;
        $eubt      = $p_tet * $p_kut * $p_jbt * $p_true;
        $eupt      = $p_tet * $p_kut * $p_jpt * $p_true;
        $eudt      = $p_tet * $p_kut * $p_jdt * $p_true;

        $frbt      = $p_tft * $p_krt * $p_jbt * $p_true;
        $frpt      = $p_tft * $p_krt * $p_jpt * $p_true;
        $frdt      = $p_tft * $p_krt * $p_jdt * $p_true;
        $fubt      = $p_tft * $p_kut * $p_jbt * $p_true;
        $fupt      = $p_tft * $p_kut * $p_jpt * $p_true;
        $fudt      = $p_tft * $p_kut * $p_jdt * $p_true;

        $arbf      = $p_taf * $p_krf * $p_jbf * $p_false;
        $arpf      = $p_taf * $p_krf * $p_jpf * $p_false;
        $ardf      = $p_taf * $p_krf * $p_jdf * $p_false;
        $aubf      = $p_taf * $p_kuf * $p_jbf * $p_false;
        $aupf      = $p_taf * $p_kuf * $p_jpf * $p_false;
        $audf      = $p_taf * $p_kuf * $p_jdf * $p_false;

        $brbf      = $p_tbf * $p_krf * $p_jbf * $p_false;
        $brpf      = $p_tbf * $p_krf * $p_jpf * $p_false;
        $brdf      = $p_tbf * $p_krf * $p_jdf * $p_false;
        $bubf      = $p_tbf * $p_kuf * $p_jbf * $p_false;
        $bupf      = $p_tbf * $p_kuf * $p_jpf * $p_false;
        $budf      = $p_tbf * $p_kuf * $p_jdf * $p_false;

        $crbf      = $p_tcf * $p_krf * $p_jbf * $p_false;
        $crpf      = $p_tcf * $p_krf * $p_jpf * $p_false;
        $crdf      = $p_tcf * $p_krf * $p_jdf * $p_false;
        $cubf      = $p_tcf * $p_kuf * $p_jbf * $p_false;
        $cupf      = $p_tcf * $p_kuf * $p_jpf * $p_false;
        $cudf      = $p_tcf * $p_kuf * $p_jdf * $p_false;

        $drbf      = $p_tdf * $p_krf * $p_jbf * $p_false;
        $drpf      = $p_tdf * $p_krf * $p_jpf * $p_false;
        $drdf      = $p_tdf * $p_krf * $p_jdf * $p_false;
        $dubf      = $p_tdf * $p_kuf * $p_jbf * $p_false;
        $dupf      = $p_tdf * $p_kuf * $p_jpf * $p_false;
        $dudf      = $p_tdf * $p_kuf * $p_jdf * $p_false;

        $erbf      = $p_tef * $p_krf * $p_jbf * $p_false;
        $erpf      = $p_tef * $p_krf * $p_jpf * $p_false;
        $erdf      = $p_tef * $p_krf * $p_jdf * $p_false;
        $eubf      = $p_tef * $p_kuf * $p_jbf * $p_false;
        $eupf      = $p_tef * $p_kuf * $p_jpf * $p_false;
        $eudf      = $p_tef * $p_kuf * $p_jdf * $p_false;

        $frbf      = $p_tff * $p_krf * $p_jbf * $p_false;
        $frpf      = $p_tff * $p_krf * $p_jpf * $p_false;
        $frdf      = $p_tff * $p_krf * $p_jdf * $p_false;
        $fubf      = $p_tff * $p_kuf * $p_jbf * $p_false;
        $fupf      = $p_tff * $p_kuf * $p_jpf * $p_false;
        $fudf      = $p_tff * $p_kuf * $p_jdf * $p_false;

        $p_arbt      = $arbt / ($arbt + $arbf);
        $p_arpt      = $arpt / ($arpt + $arpf);
        $p_ardt      = $ardt / ($ardt + $ardf);
        $p_aubt      = $aubt / ($aubt + $aubf);
        $p_aupt      = $aupt / ($aupt + $aupf);
        $p_audt      = $audt / ($audt + $audf);

        $p_brbt      = $brbt / ($brbt + $brbf);
        $p_brpt      = $brpt / ($brpt + $brpf);
        $p_brdt      = $brdt / ($brdt + $brdf);
        $p_bubt      = $bubt / ($bubt + $bubf);
        $p_bupt      = $bupt / ($bupt + $bupf);
        $p_budt      = $budt / ($budt + $budf);

        $p_crbt      = $crbt / ($crbt + $crbf);
        $p_crpt      = $crpt / ($crpt + $crpf);
        $p_crdt      = $crdt / ($crdt + $crdf);
        $p_cubt      = $cubt / ($cubt + $cubf);
        $p_cupt      = $cupt / ($cupt + $cupf);
        $p_cudt      = $cudt / ($cudt + $cudf);

        $p_drbt      = $drbt / ($drbt + $drbf);
        $p_drpt      = $drpt / ($drpt + $drpf);
        $p_drdt      = $drdt / ($drdt + $drdf);
        $p_dubt      = $dubt / ($dubt + $dubf);
        $p_dupt      = $dupt / ($dupt + $dupf);
        $p_dudt      = $dudt / ($dudt + $dudf);

        $p_erbt      = $erbt / ($erbt + $erbf);
        $p_erpt      = $erpt / ($erpt + $erpf);
        $p_erdt      = $erdt / ($erdt + $erdf);
        $p_eubt      = $eubt / ($eubt + $eubf);
        $p_eupt      = $eupt / ($eupt + $eupf);
        $p_eudt      = $eudt / ($eudt + $eudf);

        $p_frbt      = $frbt / ($frbt + $frbf);
        $p_frpt      = $frpt / ($frpt + $frpf);
        $p_frdt      = $frdt / ($frdt + $frdf);
        $p_fubt      = $fubt / ($fubt + $fubf);
        $p_fupt      = $fupt / ($fupt + $fupf);
        $p_fudt      = $fudt / ($fudt + $fudf);

        $p_arbf      = $arbf / ($arbt + $arbf);
        $p_arpf      = $arpf / ($arpt + $arpf);
        $p_ardf      = $ardf / ($ardt + $ardf);
        $p_aubf      = $aubf / ($aubt + $aubf);
        $p_aupf      = $aupf / ($aupt + $aupf);
        $p_audf      = $audf / ($audt + $audf);

        $p_brbf      = $brbf / ($brbt + $brbf);
        $p_brpf      = $brpf / ($brpt + $brpf);
        $p_brdf      = $brdf / ($brdt + $brdf);
        $p_bubf      = $bubf / ($bubt + $bubf);
        $p_bupf      = $bupf / ($bupt + $bupf);
        $p_budf      = $budf / ($budt + $budf);

        $p_crbf      = $crbf / ($crbt + $crbf);
        $p_crpf      = $crpf / ($crpt + $crpf);
        $p_crdf      = $crdf / ($crdt + $crdf);
        $p_cubf      = $cubf / ($cubt + $cubf);
        $p_cupf      = $cupf / ($cupt + $cupf);
        $p_cudf      = $cudf / ($cudt + $cudf);

        $p_drbf      = $drbf / ($drbt + $drbf);
        $p_drpf      = $drpf / ($drpt + $drpf);
        $p_drdf      = $drdf / ($drdt + $drdf);
        $p_dubf      = $dubf / ($dubt + $dubf);
        $p_dupf      = $dupf / ($dupt + $dupf);
        $p_dudf      = $dudf / ($dudt + $dudf);

        $p_erbf      = $erbf / ($erbt + $erbf);
        $p_erpf      = $erpf / ($erpt + $erpf);
        $p_erdf      = $erdf / ($erdt + $erdf);
        $p_eubf      = $eubf / ($eubt + $eubf);
        $p_eupf      = $eupf / ($eupt + $eupf);
        $p_eudf      = $eudf / ($eudt + $eudf);

        $p_frbf      = $frbf / ($frbt + $frbf);
        $p_frpf      = $frpf / ($frpt + $frpf);
        $p_frdf      = $frdf / ($frdt + $frdf);
        $p_fubf      = $fubf / ($fubt + $fubf);
        $p_fupf      = $fupf / ($fupt + $fupf);
        $p_fudf      = $fudf / ($fudt + $fudf);

        $choice = Masuk::where('id', $masuk->id)->first();

        $match = Masuk::where('id', '!=', $masuk->id)
            ->where('tujuan', $masuk->tujuan)
            ->where('keterangan', $masuk->keterangan)
            ->where('jenis_surat', $masuk->jenis_surat)
            ->get();

        return view('masuk.naive', [
            'masuks' => naiveTable::class,

            'count'       => $count,
            'count_true'  => $count_true,
            'count_false' => $count_false,

            'count_tat' => $count_tat,
            'count_tbt' => $count_tbt,
            'count_tct' => $count_tct,
            'count_tdt' => $count_tdt,
            'count_tet' => $count_tet,
            'count_tft' => $count_tft,
            'count_taf' => $count_taf,
            'count_tbf' => $count_tbf,
            'count_tcf' => $count_tcf,
            'count_tdf' => $count_tdf,
            'count_tef' => $count_tef,
            'count_tff' => $count_tff,
            'total_tt'    => $total_tt,
            'p_total_tt'  => $p_total_tt,
            'total_tf'    => $total_tf,
            'p_total_tf'  => $p_total_tf,

            'count_krt' => $count_krt,
            'count_kut' => $count_kut,
            'count_krf' => $count_krf,
            'count_kuf' => $count_kuf,
            'total_kt'    => $total_kt,
            'p_total_kt'  => $p_total_kt,
            'total_kf'    => $total_kf,
            'p_total_kf'  => $p_total_kf,

            'count_jbt' => $count_jbt,
            'count_jpt' => $count_jpt,
            'count_jdt' => $count_jdt,
            'count_jbf' => $count_jbf,
            'count_jpf' => $count_jpf,
            'count_jdf' => $count_jdf,
            'total_jt'    => $total_jt,
            'p_total_jt'  => $p_total_jt,
            'total_jf'    => $total_jf,
            'p_total_jf'  => $p_total_jf,

            'p_tat'   => $p_tat,
            'p_taf'   => $p_taf,
            'p_tbt'   => $p_tbt,
            'p_tbf'   => $p_tbf,
            'p_tct'   => $p_tct,
            'p_tcf'   => $p_tcf,
            'p_tdt'   => $p_tdt,
            'p_tdf'   => $p_tdf,
            'p_tet'   => $p_tet,
            'p_tef'   => $p_tef,
            'p_tft'   => $p_tft,
            'p_tff'   => $p_tff,

            'p_krt'   => $p_krt,
            'p_krf'   => $p_krf,
            'p_kut'   => $p_kut,
            'p_kuf'   => $p_kuf,

            'p_jbt'   => $p_jbt,
            'p_jbf'   => $p_jbf,
            'p_jpt'   => $p_jpt,
            'p_jpf'   => $p_jpf,
            'p_jdt'   => $p_jdt,
            'p_jdf'   => $p_jdf,

            'p_true'      => $p_true,
            'p_false'     => $p_false,
            'total'       => $total,
            'p_total'     => $p_total,

            'arbt'        => $arbt,
            'arpt'        => $arpt,
            'ardt'        => $ardt,
            'aubt'        => $aubt,
            'aupt'        => $aupt,
            'audt'        => $audt,

            'brbt'        => $brbt,
            'brpt'        => $brpt,
            'brdt'        => $brdt,
            'bubt'        => $bubt,
            'bupt'        => $bupt,
            'budt'        => $budt,

            'crbt'        => $crbt,
            'crpt'        => $crpt,
            'crdt'        => $crdt,
            'cubt'        => $cubt,
            'cupt'        => $cupt,
            'cudt'        => $cudt,

            'drbt'        => $drbt,
            'drpt'        => $drpt,
            'drdt'        => $drdt,
            'dubt'        => $dubt,
            'dupt'        => $dupt,
            'dudt'        => $dudt,

            'erbt'        => $erbt,
            'erpt'        => $erpt,
            'erdt'        => $erdt,
            'eubt'        => $eubt,
            'eupt'        => $eupt,
            'eudt'        => $eudt,

            'frbt'        => $frbt,
            'frpt'        => $frpt,
            'frdt'        => $frdt,
            'fubt'        => $fubt,
            'fupt'        => $fupt,
            'fudt'        => $fudt,

            'arbf'        => $arbf,
            'arpf'        => $arpf,
            'ardf'        => $ardf,
            'aubf'        => $aubf,
            'aupf'        => $aupf,
            'audf'        => $audf,

            'brbf'        => $brbf,
            'brpf'        => $brpf,
            'brdf'        => $brdf,
            'bubf'        => $bubf,
            'bupf'        => $bupf,
            'budf'        => $budf,

            'crbf'        => $crbf,
            'crpf'        => $crpf,
            'crdf'        => $crdf,
            'cubf'        => $cubf,
            'cupf'        => $cupf,
            'cudf'        => $cudf,

            'drbf'        => $drbf,
            'drpf'        => $drpf,
            'drdf'        => $drdf,
            'dubf'        => $dubf,
            'dupf'        => $dupf,
            'dudf'        => $dudf,

            'erbf'        => $erbf,
            'erpf'        => $erpf,
            'erdf'        => $erdf,
            'eubf'        => $eubf,
            'eupf'        => $eupf,
            'eudf'        => $eudf,

            'frbf'        => $frbf,
            'frpf'        => $frpf,
            'frdf'        => $frdf,
            'fubf'        => $fubf,
            'fupf'        => $fupf,
            'fudf'        => $fudf,

            'p_arbt'        => $p_arbt,
            'p_arpt'        => $p_arpt,
            'p_ardt'        => $p_ardt,
            'p_aubt'        => $p_aubt,
            'p_aupt'        => $p_aupt,
            'p_audt'        => $p_audt,

            'p_brbt'        => $p_brbt,
            'p_brpt'        => $p_brpt,
            'p_brdt'        => $p_brdt,
            'p_bubt'        => $p_bubt,
            'p_bupt'        => $p_bupt,
            'p_budt'        => $p_budt,

            'p_crbt'        => $p_crbt,
            'p_crpt'        => $p_crpt,
            'p_crdt'        => $p_crdt,
            'p_cubt'        => $p_cubt,
            'p_cupt'        => $p_cupt,
            'p_cudt'        => $p_cudt,

            'p_drbt'        => $p_drbt,
            'p_drpt'        => $p_drpt,
            'p_drdt'        => $p_drdt,
            'p_dubt'        => $p_dubt,
            'p_dupt'        => $p_dupt,
            'p_dudt'        => $p_dudt,

            'p_erbt'        => $p_erbt,
            'p_erpt'        => $p_erpt,
            'p_erdt'        => $p_erdt,
            'p_eubt'        => $p_eubt,
            'p_eupt'        => $p_eupt,
            'p_eudt'        => $p_eudt,

            'p_frbt'        => $p_frbt,
            'p_frpt'        => $p_frpt,
            'p_frdt'        => $p_frdt,
            'p_fubt'        => $p_fubt,
            'p_fupt'        => $p_fupt,
            'p_fudt'        => $p_fudt,

            'p_arbf'        => $p_arbf,
            'p_arpf'        => $p_arpf,
            'p_ardf'        => $p_ardf,
            'p_aubf'        => $p_aubf,
            'p_aupf'        => $p_aupf,
            'p_audf'        => $p_audf,

            'p_brbf'        => $p_brbf,
            'p_brpf'        => $p_brpf,
            'p_brdf'        => $p_brdf,
            'p_bubf'        => $p_bubf,
            'p_bupf'        => $p_bupf,
            'p_budf'        => $p_budf,

            'p_crbf'        => $p_crbf,
            'p_crpf'        => $p_crpf,
            'p_crdf'        => $p_crdf,
            'p_cubf'        => $p_cubf,
            'p_cupf'        => $p_cupf,
            'p_cudf'        => $p_cudf,

            'p_drbf'        => $p_drbf,
            'p_drpf'        => $p_drpf,
            'p_drdf'        => $p_drdf,
            'p_dubf'        => $p_dubf,
            'p_dupf'        => $p_dupf,
            'p_dudf'        => $p_dudf,

            'p_erbf'        => $p_erbf,
            'p_erpf'        => $p_erpf,
            'p_erdf'        => $p_erdf,
            'p_eubf'        => $p_eubf,
            'p_eupf'        => $p_eupf,
            'p_eudf'        => $p_eudf,

            'p_frbf'        => $p_frbf,
            'p_frpf'        => $p_frpf,
            'p_frdf'        => $p_frdf,
            'p_fubf'        => $p_fubf,
            'p_fupf'        => $p_fupf,
            'p_fudf'        => $p_fudf,

            'choice'        => $choice,

            'matchs' => SpladeTable::for($match)
                ->column('nomor_surat')
                ->column('tujuan')
                ->column('keterangan')
                ->column('jenis_surat')
                ->column('is_spam')
        ]);
    }
}
