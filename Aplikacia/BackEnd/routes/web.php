<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail as rMail;
use App\Mail\MyEmail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/email', function () {
    try {
        rMail::to('ivan.gabris2@student.ukf.sk')->send(new App\Mail\MyEmail());
        return response()->json(['success' => 'Mail sent successfully.']);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Failed to send mail.', 'message' => $e->getMessage()]);
    }
});

