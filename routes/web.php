<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Models\Rekam;
use App\Models\Pasien;
use App\Models\Dokter;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/rekam', function(){
    return view('rekam', [
        'rekams' => Rekam::all(),
    ]);
})->middleware(['auth'])->name('rekam');

Route::get('/rekam/{rekam:id}', function(Rekam $rekam){
    return view('detil', [
        'rekam' => $rekam,
    ]);
})->middleware(['auth'])->name('detil');

Route::get('/pasien', function(){
    return view('pasien', [
        'pasiens' => Pasien::all(),
    ]);
})->middleware(['auth'])->name('pasien');

Route::get('/pasien/{pasien:id}', function(Pasien $pasien){
    return view('rekam', [
        'rekams' => $pasien->rekams,
    ]);
})->middleware(['auth'])->name('rekamPasien');

Route::get('/dokter', function(){
    return view('dokter', [
        'dokters' => Dokter::all(),
    ]);
})->middleware(['auth'])->name('dokter');

Route::get('/dokter/{dokter:id}', function(Dokter $dokter){
    return view('rekam', [
        'rekams' => $dokter->rekams,
    ]);
})->middleware(['auth'])->name('rekamDokter');

Route::get('/form', function(){
    return view('form');
})->middleware(['auth'])->name('form');

Route::get('/formulir', [FormController::class, 'formulir'])->middleware(['auth'])->name('form');
Route::post('/proses', [FormController::class, 'proses'])->middleware(['auth'])->name('form');