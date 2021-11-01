<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalController;
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

Route::get('/mahasiswa', [MahasiswaController::class, 'tabelmahasiswa']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'createMahasiswa']);
Route::post('/mahasiswa/add', [MahasiswaController::class, 'addMahasiswa']);
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'editMahasiswa']);
Route::post('/mahasiswa/ubah/{id}', [MahasiswaController::class, 'ubahMahasiswa']);
Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'deleteMahasiswa']);
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'showMahasiswa']);

Route::get('/dosen', [DosenController::class, 'tabelDosen']);
Route::get('/dosen/{id}', [DosenController::class, 'showDosen']);
Route::get('/dosen/create', [DosenController::class, 'createdosen']);
Route::post('/dosen/tambah', [DosenController::class, 'tambahdosen']);
Route::get('/dosen/{id}/edit', [DosenController::class, 'editDosen']);
Route::post('/dosen/{id}/ubah', [DosenController::class, 'ubahDosen']);
Route::get('/dosen/delete/{id}', [DosenController::class, 'deleteDosen']);

Route::get('/tabelJadwal', [JadwalController::class, 'tabelJadwal']);
Route::get('/formJadwal', [JadwalController::class, 'formJadwal']);
Route::get('/showJadwal', [JadwalController::class, 'showJadwal']);