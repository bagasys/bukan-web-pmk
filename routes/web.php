<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\StudentController;
use App\Models\Lecturer;

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

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin');
    });
    Route::resource('/lecturers', LecturerController::class);
    Route::resource('/meetings', MeetingController::class);
    Route::resource('/students', StudentController::class);
});
