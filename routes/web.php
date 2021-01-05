<?php

use App\Http\Controllers\ProfilKalurahanController;
use Illuminate\Support\Facades\Auth;
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
Route::group(['middleware' => ['auth']], function () {
    // your routes
    Route::get('/', function () {
        return view('dashboard');
    });
    Route::get('login', function () {
        return view('login');
    });
    Route::get('/admin', 'AdminController@index');
    Route::post('/admin', 'AdminController@store');
    Route::get('/admin/{id}/edit', 'AdminController@edit');
    Route::post('/admin/edit', 'AdminController@update');
    Route::delete('/delete/{id}', 'AdminController@destroy');
    Route::get('/profil-kalurahan', 'ProfilKalurahanController@index');
    Route::get('/edit-password', function () {
        return view('edit-password');
    });
    Route::get('/info-desa', 'infoDesaController@index');
    Route::get('/info-desa/{id}', 'infoDesaController@show');
    Route::get('/tambah-info-desa', 'infoDesaController@create');
    Route::post('/tambah-info-desa', 'infoDesaController@store');
    Route::get('/data-penduduk-desa', 'CitizenController@index');
    Route::get('/data-penduduk/create', 'CitizenController@create');
    Route::get('/data-penduduk/{id}/edit', 'CitizenController@edit');
    Route::get('/data-penduduk-desa/delete/{id}', 'CitizenController@delete');

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
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
});

Auth::routes();
