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
use App\Http\Controllers\ValidasiController;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('authenticate', 'authenticate')->name('authenticate');
    Route::get('/', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
Route::resource('lspop', LspopController::class);
Route::resource('spop', SpopController::class);
Route::controller(LspopController::class)->group(function () {
    Route::get('/lspop/detail/', 'show')->name('lspop.show');
    Route::get('/lspop/edit/', 'edit')->name('lspop.edit');
});
Route::controller(SpopController::class)->group(function () {
    Route::get('/spop/detail/{NOP}', 'show')->name('spop.show'); 
});

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
Route::controller(PelayananController::class)->group(function () {
    Route::get('/pelayanan/detail', 'show')->name('pelayanan.show');
    Route::get('/pelayanan-laporan', 'laporan')->name('pelayanan.laporan');

});

Route::resource('user', UserController::class);
Route::controller(UserController::class)->group(function () {
    Route::get('/user/{user}/{no}', 'show')->name('user.show');
});


Route::controller(PelayananLaporanController::class)->group(function () {
    Route::get('/pelayananLap', 'index')->name('pelayananLap.index');
    Route::post('/pelayananLap/cetak', 'print')->name('pelayananLap.cetak');
    Route::post('/pelayanan/lihat', 'look')->name('pelayananLap.lihat');
});
Route::controller(HasilInputPelayananController::class)->group(function () {
    Route::get('/hasilinput', 'index')->name('hasilInputPelayanan.index');
    Route::post('/hasilinput/cetak', 'print')->name('hasilInputPelayanan.cetak');
});
Route::controller(InformasiPBBController::class)->group(function () {
    Route::get('/informasiPbb', 'index')->name('informasiPbb.index');
    Route::post('/informasiPbb/cetak', 'print')->name('informasiPbb.cetak');
});
Route::controller(NeracaBPKController::class)->group(function () {
    Route::get('/neracaBpk', 'index')->name('neracaBpk.index');
    Route::post('/neracaBpk/cetak', 'print')->name('neracaBpk.cetak');
});
Route::controller(NeracaKPPController::class)->group(function () {
    Route::get('/neracaKpp', 'index')->name('neracaKpp.index');
    Route::post('/neracaKpp/cetak', 'print')->name('neracaKpp.cetak');
});
Route::controller(RealisasiKelurahanController::class)->group(function () {
    Route::get('/realisasiKel', 'index')->name('realisasiKel.index');
    Route::post('/realisasiKel/cetak', 'print')->name('realisasiKel.cetak');
    Route::post('/realisasiKel/lihat', 'look')->name('realisasiKel.lihat');
});
Route::controller(SKNJOPController::class)->group(function () {
    Route::get('/skNjop', 'index')->name('skNjop.index');
    Route::post('/skNjop/cetak', 'print')->name('skNjop.cetak');
});
Route::controller(SummaryNeracaBPKController::class)->group(function () {
    Route::get('/summaryBPK', 'index')->name('summaryNerBPK.index');
    Route::post('/summaryBPK/cetak', 'print')->name('summaryNerBPK.cetak');
});
Route::controller(SummaryNeracaKPPController::class)->group(function () {
    Route::get('/summaryKPP', 'index')->name('summaryNerKPP.index');
    Route::post('/summaryKPP/cetak', 'print')->name('summaryNerKPP.cetak');
});
Route::controller(ValidasiController::class)->group(function () {
    Route::get('/validasi', 'index')->name('validasi.index');
    Route::post('/validasi/cetak', 'export')->name('validasi.export');
    Route::post('/validasi/lihat', 'look')->name('validasi.lihat');
    Route::get('/validasi/assign', 'assign')->name('validasi.assign');
    Route::get('/validasi/laporan', 'laporan')->name('validasi.laporan');
});

Route::resource('njoptkp', NJOPTKPController::class);
Route::controller(TunggakanController::class)->group(function () {
    Route::get('/tunggakan', 'index')->name('tunggakan.index');
    Route::post('/tunggakan/cetak', 'print')->name('tunggakan.cetak');
});
Route::resource('tarif', TarifController::class);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
