<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\notifikasiController;
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

Route::get('/view-kirim-notifikasi', [notifikasiController::class, 'index']);
Route::get('/view-terima-notifikasi', [notifikasiController::class, 'viewTerimaNotifikasi']);
Route::post('/kirim', [notifikasiController::class, 'kirimNotifikasi']);
