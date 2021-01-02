<?php

use App\Http\Controllers\ProfilKalurahanController;
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
Route::get('login', function () {
    return view('login');
});
Route::get('/admin', 'AdminController@index');
Route::post('/admin', 'AdminController@store');
Route::get('/admin/{id}/edit', 'AdminController@edit');
Route::get('/profil-kalurahan', 'ProfilKalurahanController@index');
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
Route::get('/info-layanan-syarat', function () {
    return view('info-layanan-syarat');
});
Route::get('/info-layanan', function () {
    return view('info-layanan');
});
Route::get('/isi-tambah-info-desa', function () {
    return view('isi-tambah-info-desa');
});
Route::get('/edit-tambah-info-desa', function () {
    return view('edit-info-desa');
});
Route::get('/layanan', function () {
    return view('layanan');
});
Route::get('/detail-layanan', function () {
    return view('detail-layanan');
});
Route::get('/aduan', function () {
    return view('aduan');
});
Route::get('/statistik-layanan', function () {
    return view('statistik-layanan');
});