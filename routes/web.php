<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\KeluarController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('splade')->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['verified'])->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/masuk', [MasukController::class, 'index'])->name('masuk.index');
        Route::get('/masuk/create', [MasukController::class, 'create'])->name('masuk.create');
        Route::post('/masuk/store', [MasukController::class, 'store'])->name('masuk.store');
        Route::delete('/masuk/{masuk}', [MasukController::class, 'destroy'])->name('masuk.destroy');

        Route::get('/keluar', [KeluarController::class, 'index'])->name('keluar.index');
        Route::get('/keluar/create', [KeluarController::class, 'create'])->name('keluar.create');
        Route::post('/keluar/store', [KeluarController::class, 'store'])->name('keluar.store');
        Route::delete('/keluar/{keluar}', [KeluarController::class, 'destroy'])->name('keluar.destroy');
    });

    require __DIR__.'/auth.php';
});