<?php

use App\Http\Controllers\LecturerController;
use App\Http\Controllers\MeetingController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransactionController;
use App\Models\Lecturer;
use App\Models\Transaction;

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
    Route::resource('/transactions', TransactionController::class);
});

//Landing Page
Route::get('/about', function () {
    return view('landing-page/about');
});

Route::get('/blog-single', function () {
    return view('landing-page/blog-single');
});

Route::get('/blog', function () {
    return view('landing-page/blog');
});

Route::get('/contact', function () {
    return view('landing-page/contact');
});

Route::get('/events', function () {
    return view('landing-page/events');
});

Route::get('/index', function () {
    return view('landing-page/index');
});

Route::get('/ministries', function () {
    return view('landing-page/ministries');
});

Route::get('/sermons', function () {
    return view('landing-page/sermons');
});

