<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AritmatikaController;


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

Route::group(['middleware' => 'guest:login'], function () {

    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/daftar-register', [LoginController::class, 'daftar'])->name('daftar-register');
    Route::post('/proses-login', [LoginController::class, 'prosesLogin'])->name('proses-login');
});

Route::group(['middleware' =>  ['web', 'auth:login']], function () {
    
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/tambah-user', [UserController::class, 'tambah'])->name('tambah-user');
    Route::post('/simpan-user', [UserController::class, 'save'])->name('simpan-user');
    Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('edit-user');
    Route::post('/update-user/{id}', [UserController::class, 'update'])->name('update-user');
    Route::get('/hapus-user/{id}', [UserController::class, 'hapus'])->name('hapus-user');
    
    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
    Route::get('/tambah-barang', [BarangController::class, 'tambah'])->name('tambah-barang');
    Route::post('/simpan-barang', [BarangController::class, 'save'])->name('simpan-barang');

    Route::get('/aritmatika', [AritmatikaController::class, 'index'])->name('aritmatika');
    Route::post('/aritmatika-proses-tambah', [AritmatikaController::class, 'proses_tambah'])->name('proses_tambah');
    Route::post('/aritmatika-proses-kurang', [AritmatikaController::class, 'proses_kurang'])->name('proses_kurang');

});


