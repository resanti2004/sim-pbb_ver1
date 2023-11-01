<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExtendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\SpopController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    return view('kerangka.master');
});

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/spop', [ExtendController::class, 'index2'])->name('spop');

Route::controller(AuthController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(SpopController::class)->group(function() {
    Route::get('/spop', 'index')->name('spop');
    Route::get('/create', 'create')->name('spop.create');
    Route::get('/edit', 'edit')->name('spop.edit');
    Route::get('/update', 'update')->name('spop.update');
    Route::get('/delete', 'delete')->name('spop.delete');
});




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
