<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\TampilanController;

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
    return view('pengguna.login');
});

//? login

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});   //? jika ingin ke dashboard harus login terlebih dahulu

Route::get('/viewguru', [TampilanController::class, 'index'])->name('viewguru');

//? register
Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');

Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');




//? table guru
Route::get('/dataguru', [GuruController::class, 'index']);

Route::get('/tambahguru', [GuruController::class, 'create']);

Route::post('/insertguru', [GuruController::class, 'store']);

Route::get('/tampilanguru/{id}', [GuruController::class, 'tampilan']);

Route::put('/updateguru/{id}', [GuruController::class, 'update']);

Route::get('/deleteguru/{id}', [GuruController::class, 'delete']);

//? table kelas
Route::get('/datakelas', [KelasController::class, 'index']);

Route::get('/tambahkelas', [KelasController::class, 'create']);

Route::post('/insertkelas', [KelasController::class, 'store']);

Route::get('/tampilankelas/{id}', [KelasController::class, 'tampilan']);

Route::put('/updatekelas/{id}', [KelasController::class, 'update']);

Route::get('/deletekelas/{id}', [KelasController::class, 'delete']);

//? table agenda
Route::get('/dataagenda', [AgendaController::class, 'index']);

Route::get('/tambahagenda', [AgendaController::class, 'create']);

Route::post('/insertagenda', [AgendaController::class, 'store']);

Route::get('/tampilanagenda/{id}', [AgendaController::class, 'tampilan']);

Route::put('/updateagenda/{id}', [AgendaController::class, 'update']);

Route::get('/deleteagenda/{id}', [AgendaController::class, 'delete']);

//? tampilanguru

Route::post('/insertdataview', [TampilanController::class, 'store']);
