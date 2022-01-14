<?php

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
Route::middleware('auth:user')->group(function(){
    Route::get('/', 'MainController@index');
  });
Route::get('user/login', 'Auth\FrontLoginController@getLogin')->name('user.login');
Route::post('user/login', 'Auth\FrontLoginController@postLogin');
Route::get('user/logout', 'Auth\FrontLoginController@postLogout');
Route::get('/layanan/{id}/show', 'MainController@show')->name('layanan.show');
Route::get('/layanan/{id}/create', 'MainController@create')->name('layanan.create');
Route::get('/aduan/create', 'MainController@aduan_create')->name('aduan.create');
Route::post('/aduan/store', 'MainController@aduan_store')->name('aduan.store');

Route::get('/view-info/{id}', 'MainController@villageInfoDetail');
Route::get('/detail-service-info/{id}', 'MainController@ServiceInfoDetail');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('login', function () {
        return view('login');
    });

    Route::get("send-email", "EmailController@sendEmailToAdmin");
    // Route::get("send-email", "NotifyController@sendPassword");

    Route::get('/admin', 'AdminController@index');
    Route::post('/admin', 'AdminController@store');
    Route::get('/admin/resend/{id}', 'AdminController@resendEmail');
    Route::get('/admin/{id}/edit', 'AdminController@edit');
    Route::post('/admin/edit', 'AdminController@update');
    Route::get('/admin/edit/password', 'AdminController@editPassword');
    Route::post('/admin/edit/password', 'AdminController@updatePassword');
    Route::delete('admin/delete/{id}', 'AdminController@destroy');

    Route::get('/profil-kalurahan', 'VillageProfileController@index');
    Route::post('/profil-kalurahan', 'VillageProfileController@store');
    Route::get('/profil-kalurahan/{id}/{type}/edit', 'VillageProfileController@edit');
    Route::put('/profil-kalurahan/{type}', 'VillageProfileController@update');
    Route::delete('/profil-kalurahan/{id}/{type}', 'VillageProfileController@destroy');

    Route::get('/edit-password', function () {
        return view('edit-password');
    });
    Route::get('/info-desa', 'VillageInfoController@index');
    Route::get('/info-desa/{id}', 'VillageInfoController@show');
    Route::get('/edit-info-desa/{id}/edit', 'VillageInfoController@edit');
    Route::put('/edit-info-desa/{id}', 'VillageInfoController@update');
    Route::get('/tambah-info-desa', 'VillageInfoController@create');
    Route::post('/tambah-info-desa', 'VillageInfoController@store');
    Route::delete('/info-desa/{id}', 'VillageInfoController@destroy');

    Route::get('/data-penduduk', 'CitizenController@index');
    Route::get('data-penduduk/create', 'CitizenController@create');
    Route::post('data-penduduk/create', 'CitizenController@store');
    Route::get('data-penduduk/{id}/edit', 'CitizenController@edit');

    Route::post('data-penduduk/{id}/update', 'CitizenController@update');
    Route::delete('data-penduduk/delete/{id}', 'CitizenController@destroy');
    Route::post('data-penduduk/delete/{id}', 'CitizenController@updateDelete');
    Route::post('data-penduduk/import-excel', 'CitizenController@importExcel');
    Route::get('data-penduduk/export-excel', 'CitizenController@exportExcel');
    Route::get('/citizen-name', 'CitizenController@select2Name');
    Route::get('/citizen-nik', 'CitizenController@select2Nik');
    Route::get('data-penduduk/{id}', 'CitizenController@show');
    Route::get('/citizen/{id}', 'CitizenController@show_data');
    Route::post('/citizen/{id}/dataverif', 'CitizenController@dataVerif');

    Route::get('/info-layanan', 'ServiceInfoController@index');
    Route::post('/info-layanan', 'ServiceInfoController@store');
    Route::get('/info-layanan/{id}/{type}/edit', 'ServiceInfoController@edit');
    Route::put('/info-layanan/{type}', 'ServiceInfoController@update');
    Route::delete('/info-layanan/{id}/{type}', 'ServiceInfoController@destroy');
    Route::get('/info-layanan/data/alur', 'ServiceInfoController@data_alur');

    Route::get('service', 'ServiceController@index')->name('service');
    Route::get('/service/index/{id}/edit', 'ServiceController@edit');
    Route::POST('/service/store', 'ServiceController@store');
    Route::delete('/service/{id}', 'ServiceController@destroy');
    Route::get('layanan/{category}/{id}', 'ServiceController@show');
    Route::post('layanan/{id}/status', 'ServiceController@statusUpdate');
    Route::post('service/{id}/verified', 'ServiceController@serviceVerified');
    Route::get('/service/surat/{id}/{id_cat}', 'ServiceController@cetakSurat');
    Route::post('service-file/{id}/verifStatus', 'ServiceFileController@verifUpdate');
    Route::post('service-file/{id}/deniedStatus/{service_id}', 'ServiceFileController@deniedUpdate');
    Route::get('service-file/{id}/verifFiles/{cat}', 'ServiceFileController@verifFiles');
    Route::get('service/count', 'DashboardController@countService');

    Route::get('/aduan', 'FeedbackController@index');
    Route::get('/aduan/{id}', 'FeedbackController@show');
    Route::delete('/aduan/{id}', 'FeedbackController@destroy');
    Route::post('/aduan/{id}/readUpdate', 'FeedbackController@readUpdate');
    Route::post('/aduan/{id}/importantUpdate/{status}', 'FeedbackController@importantUpdate');

    Route::get('/statistik-layanan', function () {
        return view('statistik.index');
    });
    Route::get('/statistik-layanan/{month}', 'StatisticsController@getCountService');
    Route::get('/statistik-layanan-dusun/{month}', 'StatisticsController@getCountServiceDusun');
    Route::get('/statistik-aduan-dusun/{month}', 'StatisticsController@getCountFeedbackDusun');

    Route::get('/potensi-desa', 'NaturalResourceController@index');
    Route::get('/potensi-desa/add', 'NaturalResourceController@create');
    Route::post('/potensi-desa/add', 'NaturalResourceController@store');
    Route::get('/potensi-desa/{id}', 'NaturalResourceController@show');
    Route::get('/potensi-desa/{id}/edit', 'NaturalResourceController@edit');
    Route::post('/potensi-desa/{id}/edit', 'NaturalResourceController@update');
    Route::get('/potensi-desa/{id}/destroy', 'NaturalResourceController@destroy');

    Route::get('/logactivity', 'DashboardController@logActivity');

    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::get('/maintenance', function () {
        return view('maintenance');
    });
});

Auth::routes();