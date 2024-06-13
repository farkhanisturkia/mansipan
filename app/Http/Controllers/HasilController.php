<?php

namespace App\Http\Controllers;

use App\Models\Masuk;
use Phpml\Metric\Accuracy;
use Illuminate\Http\Request;
use Phpml\Dataset\ArrayDataset;
use Phpml\Classification\NaiveBayes;
use Phpml\CrossValidation\StratifiedRandomSplit;

class HasilController extends Controller
{
    public function index() {
        
        $masuk = Masuk::where('is_spam', 1)->where('is_dataset', 0)->get();

        return view('hasil.index', [
            'datas' => $masuk,
        ]);

    }
}
