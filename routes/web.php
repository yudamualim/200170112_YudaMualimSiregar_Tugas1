<?php

use App\Http\Controllers\ArrayController;
use App\Http\Controllers\LatihanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/latihan1', function () {
    return view('latihan1');
});

Route::get('/latihan2/{nomor}', function (string $nomor) {
    return view('latihan2',['nomor'=>$nomor]);
});

Route::get('/latihan1-html', function () {
    return "<h1 style='color:purple'>Ini adalah halaman HTML";
});

/*Route::get('/latihan', function () {
    $data = "Data dari route";
    return view('latihan1', ['data'=>$data]);
});*/

Route::get('/latihan', [LatihanController::class, 'index']);

/*Route::get('/latihan{nomor}', function (int $nomor) {
    $tambah = 2 + $nomor;
    return view('latihan1', ['nomor' => $nomor, 'tamba' => $tambah]);
});*/

Route::get('/latihan/{nomor}', [LatihanController::class, 'routeparam']);

Route::get('/array', [ArrayController::class, 'array']);
use App\Http\Controllers\DataMahasiswaController;
Route::resource('/DataMahasiswa', DataMahasiswaController::class);