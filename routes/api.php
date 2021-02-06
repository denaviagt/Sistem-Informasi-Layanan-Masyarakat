<?php

use App\Http\Controllers\ApiController\AuthApiController;
use App\Http\Controllers\ApiController\FeedbackApiController;
use App\Http\Controllers\ApiController\ServiceApiController;
use App\Http\Controllers\ApiController\ServiceCategoryApiController;
use App\Http\Controllers\ApiController\UserApiController;
use App\Http\Controllers\ApiController\UserCitizenApiController;
use App\Http\Controllers\ApiController\UserServiceApiController;
use App\Http\Controllers\ApiController\VillageDusunApiController;
use App\Http\Controllers\ApiController\VillageInfoApiController;
use App\Http\Controllers\ApiController\VillageMissionApiController;
use App\Http\Controllers\ApiController\VillageOrganizationStructureApiController;
use App\Http\Controllers\ApiController\VillageResourceApiController;
use App\Http\Controllers\ApiController\VillageRuleApiController;
use App\Http\Controllers\ApiController\VillageVisionApiController;
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

Route::prefix('villages')->group(function () {
    Route::get('infos', [VillageInfoApiController::class, 'index']);
    Route::get('infos/{info_id}', [VillageInfoApiController::class, 'show']);
    Route::get('resources', [VillageResourceApiController::class, 'index']);
    Route::get('resources/{resource_id}', [VillageResourceApiController::class, 'show']);
    Route::get('vision', [VillageVisionApiController::class, 'index']);
    Route::get('mission', [VillageMissionApiController::class, 'index']);
    Route::get('organization-structure', [VillageOrganizationStructureApiController::class, 'index']);
    Route::get('rules', [VillageRuleApiController::class, 'index']);
    Route::get('padukuhans', [VillageDusunApiController::class, 'index']);
});

Route::prefix('services')->group(function () {
    Route::get('categories', [ServiceCategoryApiController::class, 'index']);
    Route::get('categories/{category_id}', [ServiceCategoryApiController::class, 'show']);
    Route::get('categories/{category_id}/requirements', [ServiceCategoryApiController::class, 'requirements']);
    Route::get('categories/{category_id}/procedures', [ServiceCategoryApiController::class, 'procedures']);
    Route::post('categories/{category_id}/files', [ServiceCategoryApiController::class, 'files']);
    Route::post('categories/{category_id}/submit', [ServiceApiController::class, 'store']);
});

Route::prefix('feedback')->group(function () {
    Route::post('', [FeedbackApiController::class, 'store']);
    Route::get('', [FeedbackApiController::class, 'index']);
});

Route::prefix('users')->group(function () {
    Route::get('{user_id}', [UserApiController::class, 'show']);
    Route::get('{user_id}/citizen', [UserApiController::class, 'citizen']);
    Route::get('{user_id}/citizen/dusun', [UserApiController::class, 'dusun']);
    Route::get('{user_id}/services/submission', [UserServiceApiController::class, 'submission']);
    Route::get('{user_id}/services/history', [UserServiceApiController::class, 'history']);
});
