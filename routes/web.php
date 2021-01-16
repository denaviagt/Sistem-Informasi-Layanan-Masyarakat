<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ServiceInfoController;
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
    Route::get('/', 'DashboardController@index');
    Route::get('login', function () {
        return view('login');
    });

    Route::get('/admin', 'AdminController@index');
    Route::post('/admin', 'AdminController@store');
    Route::get('/admin/{id}/edit', 'AdminController@edit');
    Route::post('/admin/edit', 'AdminController@update');
    Route::post('/admin/edit/password', 'AdminController@updatePassword');
    Route::delete('/delete/{id}', 'AdminController@destroy');

    Route::get('/profil-kalurahan', 'VillageProfileController@index');
    Route::post('/profil-kalurahan', 'VillageProfileController@store');
    Route::get('/profil-kalurahan/{id}/{type}/edit', 'VillageProfileController@edit');
    Route::put('/profil-kalurahan/{type}', 'VillageProfileController@update');
    Route::delete('/profil-kalurahan/{id}/{type}', 'VillageProfileController@destroy');

    Route::get('/edit-password', function () {
        return view('edit-password');
    });
    Route::get('/info-desa', 'infoDesaController@index');
    Route::get('/info-desa/{id}', 'infoDesaController@show');
    Route::get('/edit-info-desa/{id}/edit', 'infoDesaController@edit');
    Route::put('/edit-info-desa/{id}', 'infoDesaController@update');
    Route::get('/tambah-info-desa', 'infoDesaController@create');
    Route::post('/tambah-info-desa', 'infoDesaController@store');
    Route::delete('/info-desa/{id}', 'infoDesaController@destroy');

    Route::get('/data-penduduk', 'CitizenController@index');
    Route::get('data-penduduk/create', 'CitizenController@create');
    Route::post('data-penduduk/create', 'CitizenController@store');
    Route::get('data-penduduk/{id}/edit', 'CitizenController@edit');
    Route::get('data-penduduk/{id}', 'CitizenController@show');
    Route::post('data-penduduk/{id}/update', 'CitizenController@update');
    Route::delete('data-penduduk/delete/{id}', 'CitizenController@destroy');
    Route::get('/citizen-name', 'CitizenController@select2Name');
    Route::get('/citizen-nik', 'CitizenController@select2Nik');
    Route::get('/citizen/{id}', 'CitizenController@show');
    Route::post('/citizen/{id}/dataverif', 'CitizenController@dataVerif');

    Route::get('/info-layanan/{category?}', 'ServiceInfoController@index');
    Route::post('/info-layanan', 'ServiceInfoController@store');
    Route::get('/info-layanan/{id}/{type}/edit', 'ServiceInfoController@edit');
    Route::put('/info-layanan/{type}', 'ServiceInfoController@update');
    Route::delete('/info-layanan/{id}/{type}', 'ServiceInfoController@destroy');
    Route::get('/info-layanan/data/alur', 'ServiceInfoController@data_alur');

    // Route::get('/layanan', function () {
    //     return view('service/index');
    // });
    // Route::get('/service/index', 'ServiceInfoController@index');
    // Route::get('/service/index/{id}/edit', 'ServiceInfoController@edit');
    // Route::POST('/service/store', 'ServiceInfoController@store');
    // Route::delete('/service/store/{id}', 'ServiceInfoController@destroy');
    Route::get('layanan/{category}/{id}', 'ServiceController@show');
    Route::post('layanan/{id}/status', 'ServiceController@statusUpdate');
    Route::post('service/{id}/verified', 'ServiceController@serviceVerified');
    // Route::resource('service', 'ServiceController');
    Route::post('service-file/{id}/verifStatus', 'ServiceFileController@verifUpdate');
    Route::post('service-file/{id}/deniedStatus/{service_id}', 'ServiceFileController@deniedUpdate');
    Route::get('service-file/{id}/verifFiles/{cat}', 'ServiceFileController@verifFiles');
    Route::get('service/count', 'DashboardController@countService');

    Route::get('/detail-layanan', function () {
        return view('service/detail-layanan');
    });
    Route::get('/detail-kk', function () {
        return view('service/detail-kk');
    });
    Route::get('/detail-akta-kelahiran', function () {
        return view('service/detail-akta-kelahiran');
    });
    Route::get('/detail-surat-kematian', function () {
        return view('service/detail-surat-kematian');
    });
    Route::get('/detail-pindah-penduduk', function () {
        return view('service/detail-pindah-penduduk');
    });
    Route::get('/detail-masuk-penduduk', function () {
        return view('service/detail-masuk-penduduk');
    });
    Route::get('/detail-pengurusan-nikah', function () {
        return view('service/detail-pengurusan-nikah');
    });
    Route::get('/detail-pengajuan-sku', function () {
        return view('service/detail-pengajuan-sku');
    });

    Route::get('/aduan', 'FeedbackController@index');
    Route::get('/aduan/{id}', 'FeedbackController@show');
    Route::delete('/aduan/{id}', 'FeedbackController@destroy');
    Route::post('/aduan/{id}/readUpdate', 'FeedbackController@readUpdate');
    Route::post('/aduan/{id}/importantUpdate/{status}', 'FeedbackController@importantUpdate');

    Route::get('/statistik-layanan', function () {
        return view('statistik-layanan');
    });
    Route::get('/statistik-layanan/{month}', 'StatisticsController@getCountService');
    Route::get('/statistik-aduan', function () {
        return view('statistik-aduan');
    });

    Route::get('/potensi-desa', 'NaturalResourceController@index');
    Route::get('/potensi-desa/add', 'NaturalResourceController@create');
    Route::post('/potensi-desa/add', 'NaturalResourceController@store');
    Route::get('/potensi-desa/{id}', 'NaturalResourceController@show');
    Route::get('/potensi-desa/{id}/edit', 'NaturalResourceController@edit');
    Route::post('/potensi-desa/{id}/edit', 'NaturalResourceController@update');
    Route::get('/potensi-desa/{id}/destroy', 'NaturalResourceController@destroy');

    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
});

Auth::routes();
