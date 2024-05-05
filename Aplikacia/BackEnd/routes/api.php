<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdministrationController;

use App\Http\Controllers\TitleController;
use App\Http\Controllers\FirstNameController;
use App\Http\Controllers\MiddleNameController;
use App\Http\Controllers\LastNameController;

use App\Http\Controllers\PositionController;

use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\TimeTablesController;
use App\Http\Controllers\PresentationsController;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\SocialSiteController;
use App\Http\Controllers\EmailController;

use App\Http\Controllers\SpeakersController;
use App\Http\Controllers\ParticipantsController;
use App\Http\Controllers\SaidAboutUsController;
use App\Http\Controllers\SponsorController;

use App\Http\Controllers\GalleryController;

use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/AllAdministration', [AdministrationController::class, 'showAll']);

Route::get('/AllTitle', [TitleController::class, 'showAll']);
Route::get('/AllFirst_name', [FirstNameController::class, 'showAll']);
Route::get('/AllMiddle_name', [MiddleNameController::class, 'showAll']);
Route::get('/AllLast_name', [LastNameController::class, 'showAll']);

Route::get('/AllPosition', [PositionController::class, 'showAll']);

Route::get('/AllConferences', [ConferenceController::class, 'showAll']);
Route::get('/AllStages', [StageController::class, 'showAll']);
Route::get('/AllTimeTables', [TimeTablesController::class, 'showAll']);
Route::get('/AllPresentations', [PresentationsController::class, 'showAll']);

Route::get('/AllCompany', [CompanyController::class, 'showAll']);
Route::get('/AllImages', [ImagesController::class, 'showAll']);
Route::get('/AllSocial_site', [SocialSiteController::class, 'showAll']);
Route::get('/AllEmail', [EmailController::class, 'showAll']);

Route::get('/AllSpeakers', [SpeakersController::class, 'showAll']);
Route::get('/AllParticipants', [ParticipantsController::class, 'showAll']);
Route::get('/AllSaid_about_us', [SaidAboutUsController::class, 'showAll']);
Route::get('/AllSponsor', [SponsorController::class, 'showAll']);
Route::get('/AllGallery', [GalleryController::class, 'showAll']);

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);







