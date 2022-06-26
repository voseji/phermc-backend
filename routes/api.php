<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\FacilityStatusController;
use App\Http\Controllers\ProcessingStageController;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\FacilityTypeController;
// use App\Http\Controllers\ProcessingStageController;
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
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
});

Route::get('/registration', [RegistrationController::class, 'index']);
Route::post('/registration', [RegistrationController::class, 'create']);
Route::get('/registration/{eID}', [RegistrationController::class, 'show']);
Route::patch('/registration/{eID}', [RegistrationController::class, 'edit']);
Route::delete('/registration/{eID}', [RegistrationController::class, 'destroy']);


Route::get('/facility_status', [FacilityStatusController::class, 'index']);
Route::post('/facility_status', [FacilityStatusController::class, 'create']);
Route::get('/facility_status/{facilityStatusID}', [FacilityStatusController::class, 'show']);
Route::patch('/facility_status/{facilityStatusID}', [FacilityStatusController::class, 'edit']);
Route::delete('/facility_status/{facilityStatusID}', [FacilityStatusController::class, 'destroy']);

Route::get('/processing_stage', [ProcessingStageController::class, 'index']);
Route::post('/processing_stage', [ProcessingStageController::class, 'create']);
Route::get('/processing_stage/{processingStageID}', [ProcessingStageController::class, 'show']);
Route::patch('/processing_stage/{processingStageID}', [ProcessingStageController::class, 'edit']);
Route::delete('/processing_stage/{processingStageID}', [ProcessingStageController::class, 'destroy']);

Route::get('/inspection', [ProcessingStageController::class, 'index']);
Route::post('/inspection', [ProcessingStageController::class, 'create']);
Route::get('/inspection/{inspectionID}', [ProcessingStageController::class, 'show']);
Route::patch('/inspection/{processingStageID}', [ProcessingStageController::class, 'edit']);
Route::delete('/inspection/{processingStageID}', [ProcessingStageController::class, 'destroy']);

Route::get('/facility_type', [FacilityTypeController::class, 'index']);
Route::post('/facility_type', [FacilityTypeController::class, 'create']);
Route::get('/facility_type/{facilityTypeID}', [FacilityTypeController::class, 'show']);
Route::patch('/facility_type/{facilityTypeID}', [FacilityTypeController::class, 'edit']);
Route::delete('/facility_type/{facilityTypeID}', [FacilityTypeController::class, 'destroy']);

Route::get('/processing_stage', [ProcessingStageController::class, 'index']);
Route::post('/processing_stage', [ProcessingStageController::class, 'create']);
Route::get('/processing_stage/{processingStageID}', [ProcessingStageController::class, 'show']);
Route::patch('/processing_stage/{processingStageID}', [ProcessingStageController::class, 'edit']);
Route::delete('/processing_stage/{processingStageID}', [ProcessingStageController::class, 'destroy']);

