<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SiswaController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;

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




Route::get('/', [HalamanController::class, 'index']);
Route::get('/tentang', [HalamanController::class, 'tentang']);
Route::get('/perhitungan', [HalamanController::class, 'perhitungan']);
Route::get('/aturan', [HalamanController::class, 'aturan']);
Route::get('/pengelompokkan', [HalamanController::class, 'pengelompokkan']);
Route::get('/panduan', [HalamanController::class, 'panduan']);


Route::resource('siswa', SiswaController::class)->middleware('isLogin');

Route::get('/sesi', [SessionController::class, 'index'])->middleware('isTamu');
Route::post('/sesi/login', [SessionController::class, 'login'])->middleware('isTamu');
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register'])->middleware('isTamu');
Route::post('/sesi/create', [SessionController::class, 'create'])->middleware('isTamu');

Route::get('/', function () {
    return view('sesi/welcome');
})->middleware('isTamu');
