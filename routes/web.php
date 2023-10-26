<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExtendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
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

Route::get('/simpbb/dashboard', [ExtendController::class, 'index'])->name('dashboard');
Route::get('/simpbb/login', [AuthController::class, 'login'])->name('login');
Route::post('/simpbb/auth', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/spop', [ExtendController::class, 'index2'])->name('spop');
Route::get('/simpbb/register', [AuthController::class, 'register'])->name('register');
Route::post('/store', [AuthController::class, 'store'])->name('store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();
