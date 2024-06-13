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
        return view('hasil.index', [
            // 'ac' => $accuracy,
            'pr' => $predictedLabel
        ]);
    }
}
