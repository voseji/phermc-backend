<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\FacilityStatusController;
use App\Http\Controllers\ProcessingStageController;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\FacilityTypeController;
use App\Http\Controllers\InspectionTypeController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\AreaCouncilController;
use App\Http\Controllers\DistrictsController;
use App\Http\Controllers\RegistrationTypeController;
use App\Http\Controllers\TeamMembersController;

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

Route::get('/registration_all/{eID}', [RegistrationController::class, 'registrationAll']);
Route::get('/facility_stat/{eID}', [RegistrationController::class, 'facilitystatus']);
Route::get('/proc_stage/{eID}', [RegistrationController::class, 'processingstage']);
Route::get('/facility_type_all', [RegistrationController::class, 'facilitytypeAll']);
Route::get('/all_area_councils', [AreaCouncilController::class, 'allDistricts']);
Route::get('/inspection_all', [InspectionController::class, 'inspectionAll']);
Route::get('/team_all/{$teamID}', [TeamsController::class, 'teamAll']);
Route::get('/inspandreg', [RegistrationController::class, 'inspectionAndReg']);


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

Route::get('/inspection', [InspectionController::class, 'index']);
Route::post('/inspection', [InspectionController::class, 'create']);
Route::get('/inspection/{inspectionID}', [InspectionController::class, 'show']);
Route::patch('/inspection/{processingStageID}', [InspectionController::class, 'edit']);
Route::delete('/inspection/{processingStageID}', [InspectionController::class, 'destroy']);

Route::get('/facility_type', [FacilityTypeController::class, 'index']);
Route::post('/facility_type', [FacilityTypeController::class, 'create']);
Route::get('/facility_type/{facilityTypeID}', [FacilityTypeController::class, 'show']);
Route::patch('/facility_type/{facilityTypeID}', [FacilityTypeController::class, 'edit']);
Route::delete('/facility_type/{facilityTypeID}', [FacilityTypeController::class, 'destroy']);

Route::get('/inspection_type', [InspectionTypeController::class, 'index']);
Route::post('/inspection_type', [InspectionTypeController::class, 'create']);
Route::get('/inspection_type/{inspectionTypeID}', [InspectionTypeController::class, 'show']);
Route::patch('/inspection_type/{inspectionTypeID}', [InspectionTypeController::class, 'edit']);
Route::delete('/inspection_type/{inspectionTypeID}', [InspectionTypeController::class, 'destroy']);

Route::get('/teamusers/{teamID}', [TeamMembersController::class, 'teamUsers']);
Route::get('/teams1/{teamID}', [TeamsController::class, 'teamAll']);
Route::get('/teamsall1', [TeamsController::class, 'teamAll1']);
Route::get('/teams', [TeamsController::class, 'index']);
Route::post('/teams', [TeamsController::class, 'create']);
Route::get('/teams/{teamID}', [TeamsController::class, 'show']);
Route::patch('/teams/{teamID}', [TeamsController::class, 'edit']);
Route::delete('/teams/{teamID}', [TeamsController::class, 'destroy']);

Route::get('/area_councils', [AreaCouncilController::class, 'index']);
Route::post('/area_councils', [AreaCouncilController::class, 'create']);
Route::get('/area_councils/{areaCouncilID}', [AreaCouncilController::class, 'show']);
Route::patch('/area_councils/{areaCouncilID}', [AreaCouncilController::class, 'edit']);
Route::delete('/area_councils/{areaCouncilID}', [AreaCouncilController::class, 'destroy']);

Route::get('/districts', [DistrictsController::class, 'index']);
Route::post('/districts', [DistrictsController::class, 'create']);
Route::get('/districts/{districtID}', [DistrictsController::class, 'show']);
Route::patch('/districts/{districtID}', [DistrictsController::class, 'edit']);
Route::delete('/districts/{districtID}', [DistrictsController::class, 'destroy']);

Route::get('/registration_type', [RegistrationTypeController::class, 'index']);
Route::post('/registration_type', [RegistrationTypeController::class, 'create']);
Route::get('/registration_type/{registrationTypeID}', [RegistrationTypeController::class, 'show']);
Route::patch('/registration_type/{registrationTypeID}', [RegistrationTypeController::class, 'edit']);
Route::delete('/registration_type/{registrationTypeID}', [RegistrationTypeController::class, 'destroy']);

Route::get('/team_members', [TeamMembersController::class, 'index']);
Route::post('/team_members', [TeamMembersController::class, 'create']);
Route::get('/team_members/{memberID}', [TeamMembersController::class, 'show']);
Route::patch('/team_members/{memberID}', [TeamMembersController::class, 'edit']);
Route::delete('/team_members/{memberID}', [TeamMembersController::class, 'destroy']);
