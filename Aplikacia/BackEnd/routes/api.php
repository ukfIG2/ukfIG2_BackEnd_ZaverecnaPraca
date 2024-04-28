<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdministrationController;

use App\Http\Controllers\TitleController;
use App\Http\Controllers\FirstNameController;
use App\Http\Controllers\MiddleNameController;
use App\Http\Controllers\LastNameController;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ImagesController;

use App\Http\Controllers\SocialSiteController;
use App\Http\Controllers\EmailController;

use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\TimeTablesController;
use App\Http\Controllers\PresentationsController;

use App\Http\Controllers\SpeakersController;
use App\Http\Controllers\ParticipantsController;
use App\Http\Controllers\SaidAboutUsController;
use App\Http\Controllers\SponsorController;

use App\Http\Controllers\GalleryController;

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

Route::get('administration', [AdministrationController::class, 'showAll']);

Route::get('/title', [TitleController::class, 'showAll']);
Route::get('/first_name', [FirstNameController::class, 'showAll']);
Route::get('/middle_name', [MiddleNameController::class, 'showAll']);
Route::get('/last_name', [LastNameController::class, 'showAll']);

Route::get('/company', [CompanyController::class, 'showAll']);
Route::get('/position', [PositionController::class, 'showAll']);
Route::get('/images', [ImagesController::class, 'showAll']);

Route::get('/social_site', [SocialSiteController::class, 'showAll']);
Route::get('/email', [EmailController::class, 'showAll']);

Route::get('/conferences', [ConferenceController::class, 'showAll']);
Route::get('/stages', [StageController::class, 'showAll']);
Route::get('/time_tables', [TimeTablesController::class, 'showAll']);
Route::get('/presentations', [PresentationsController::class, 'showAll']);

Route::get('/speakers', [SpeakersController::class, 'showAll']);
Route::get('/participants', [ParticipantsController::class, 'showAll']);
Route::get('/said_about_us', [SaidAboutUsController::class, 'showAll']);
Route::get('/sponsor', [SponsorController::class, 'showAll']);

Route::get('/gallery', [GalleryController::class, 'showAll']);








