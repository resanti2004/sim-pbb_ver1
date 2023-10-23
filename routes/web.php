<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExtendController;


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

Route::get('/dashboard', [ExtendController::class, 'index']);
Route::get('/login', [ExtendController::class, 'index1']);
Route::get('/spop', [ExtendController::class, 'index2']);



