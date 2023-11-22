<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExtendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\InformasiPBBController;
use App\Http\Controllers\SpopController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LspopController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KabupatenController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\NeracaBPKController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\RealisasiKelurahanController;
use App\Http\Controllers\SKNJOPController;
use App\Http\Controllers\SummaryNeracaBPKController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HasilInputPelayananController;
use App\Http\Controllers\SummaryNeracaKPPController;
use App\Http\Controllers\NeracaKPPController;
use App\Http\Controllers\NJOPTKPController;
use App\Http\Controllers\PelayananLaporanController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\TunggakanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('kerangka.master');
// });

Route::get('/laravel', function () {
    return view('provinsi.detail_provinsi');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('authenticate', 'authenticate')->name('authenticate');
    Route::get('/', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

// Route::controller(SpopController::class)->group(function() {
//     Route::get('/spop', 'index')->name('spop');
//     Route::get('/create', 'create')->name('spop.create');
//     Route::get('/edit', 'edit')->name('spop.edit');
//     Route::post('/update', 'update')->name('spop.update');
//     Route::get('/delete', 'delete')->name('spop.delete');
// });


Route::resource('lspop', LspopController::class);
Route::resource('spop', SpopController::class);
Route::resource('provinsi', ProvinsiController::class);
Route::resource('kabupaten', KabupatenController::class);
Route::resource('kecamatan', KecamatanController::class);
Route::resource('kelurahan', KelurahanController::class);
Route::controller(KelurahanController::class)->group(function () {
    Route::get('/kelurahan/{kdPropinsi}/{kdDati2}/{kdKecamatan}/{kdKelurahan}/{no}', 'show')->name('kelurahan.show');
});
Route::controller(KecamatanController::class)->group(function () {
    Route::get('/kecamatan/{kdPropinsi}/{kdDati2}/{kdKecamatan}/{no}', 'show')->name('kecamatan.show');
});
Route::controller(KabupatenController::class)->group(function () {
    Route::get('/kabupaten/{kdPropinsi}/{kdDati2}/{no}', 'show')->name('kabupaten.show');
});
Route::controller(ProvinsiController::class)->group(function () {
    Route::get('/provinsi/{kdPropinsi}/{no}', 'show')->name('provinsi.show');
});


Route::resource('pelayanan', PelayananController::class);
Route::resource('user', UserController::class);
Route::controller(UserController::class)->group(function () {
    Route::get('/user/{user}/{no}', 'show')->name('user.show');
});

Route::resource('pelayananLap', PelayananLaporanController::class);
Route::resource('hasilInputPelayanan', HasilInputPelayananController::class);
Route::resource('informasiPbb', InformasiPBBController::class);
Route::resource('neracaBpk', NeracaBPKController::class);
Route::resource('neracaKpp', NeracaKPPController::class);
Route::resource('realisasiKel', RealisasiKelurahanController::class);
Route::resource('skNjop', SKNJOPController::class);
Route::resource('summaryNerBpk', SummaryNeracaBPKController::class);
Route::resource('summaryNerKPP', SummaryNeracaKPPController::class);

Route::resource('njoptkp', NJOPTKPController::class);
Route::resource('tunggakan', TunggakanController::class);
Route::resource('tarif', TarifController::class);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
