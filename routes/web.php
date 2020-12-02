<?php

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

// Route::get('/', function () {
//     // return view('welcome');
//     return view('index');
// });

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/profil-kalurahan', function () {
    return view('profil-kalurahan');
});
Route::get('/edit-password', function () {
    return view('edit-password');
});
Route::get('/info-desa', function () {
    return view('info-desa');
});
Route::get('/tambah-info-desa', function () {
    return view('tambah-info-desa');
});
Route::get('/data-penduduk-desa', function () {
    return view('data-penduduk-desa');
});
Route::get('/info-layanan-a', function () {
    return view('info-layanan-a');
});