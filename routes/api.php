<?php

use App\Http\Controllers\ApiController\AuthApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('auth')->group(function () {
    Route::prefix('user')->group(function () {
        Route::post('login', [AuthApiController::class, 'login']);
        Route::post('register', [AuthApiController::class, 'register']);
    });
});

Route::prefix('villages')->group(function (){
    Route::get('infos', [AuthApiController::class, 'login']);
    Route::get('infos/{info_id}', [AuthApiController::class, 'login']);
    Route::get('resources', [AuthApiController::class, 'login']);
    Route::get('resources/{resource_id}', [AuthApiController::class, 'login']);
    Route::get('vision', [AuthApiController::class, 'login']);
    Route::get('mission', [AuthApiController::class, 'login']);
    Route::get('apparatuses', [AuthApiController::class, 'login']);
    Route::get('organization-structure', [AuthApiController::class, 'login']);
    Route::get('rules', [AuthApiController::class, 'login']);
    Route::get('padukuhans', [AuthApiController::class, 'login']);
});

Route::prefix('services')->group(function () {
    Route::post('categories', [AuthApiController::class, 'login']);
    Route::post('categories/{category_id}', [AuthApiController::class, 'login']);
    Route::post('categories/{category_id}/requirements', [AuthApiController::class, 'login']);
    Route::post('categories/{category_id}/procedures', [AuthApiController::class, 'login']);
    Route::post('categories/{category_id}/files', [AuthApiController::class, 'login']);
    Route::post('categories/{category_id}/submit', [AuthApiController::class, 'login']);
});

Route::prefix('feedback')->group(function () {
    Route::post('', [AuthApiController::class, 'login']);
});

Route::prefix('users')->group(function () {
    Route::post('{user_id}', [AuthApiController::class, 'login']);
    Route::post('{user_id}/citizen', [AuthApiController::class, 'login']);
    Route::post('{user_id}/citizen/dusun', [AuthApiController::class, 'login']);
    Route::post('{user_id}/services/submission', [AuthApiController::class, 'login']);
    Route::post('{user_id}/services/history', [AuthApiController::class, 'login']);
});
