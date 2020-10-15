<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\CounselingController;
use App\Http\Controllers\CounselorController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\PrayerRequestController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin');
    });
    // Route::get('/login', function() {
    //     return view('auth.login');
    // });
    // Route::get('/register', function() {
    //     return view('auth.register');
    // });
    Route::resource('/lecturers', LecturerController::class);
    Route::resource('/meetings', MeetingController::class);
    Route::resource('/counselings', CounselingController::class);
    Route::resource('/counselors', CounselorController::class);
    Route::resource('/alumnis', AlumniController::class);
    Route::resource('/students', StudentController::class);
    Route::resource('/transactions', TransactionController::class);
    Route::resource('/prayerRequests', PrayerRequestController::class);
});

Route::get('/students/export_excel', [StudentController::class, 'export_excel']);
Route::post('/students/import_excel', [StudentController::class, 'import_excel']);

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
