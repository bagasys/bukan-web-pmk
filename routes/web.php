<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CounselingController;
use App\Http\Controllers\CounselorController;
use App\Http\Controllers\LandingPage\EventController;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\PrayerRequestController;
use App\Http\Controllers\RoleManagementController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserManagementController;
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

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin');
    });
    Route::resource('/lecturers', LecturerController::class);
    Route::resource('/meetings', MeetingController::class);
    Route::resource('/counselings', CounselingController::class);
    Route::resource('/counselors', CounselorController::class);
    Route::resource('/alumnis', AlumniController::class);
    Route::resource('/students', StudentController::class);
    Route::resource('/transactions', TransactionController::class);
    Route::resource('/prayer-requests', PrayerRequestController::class);
    Route::resource('/roles', RoleManagementController::class);
    Route::resource('/users', UserManagementController::class);
    Route::resource('/banners', BannerController::class);

    Route::get('/students/export_excel', [StudentController::class, 'export_excel']);
    Route::post('/students/import_excel', [StudentController::class, 'import_excel']);
    Route::get('/alumnis/export_excel', [AlumniController::class, 'export_excel']);
    Route::post('/alumnis/import_excel', [AlumniController::class, 'import_excel']);
    Route::get('/counselors/export_excel', [CounselorController::class, 'export_excel']);
    Route::post('/counselors/import_excel', [CounselorController::class, 'import_excel']);
    Route::get('/counselings/export_excel', [CounselingController::class, 'export_excel']);
    Route::post('/counselings/import_excel', [CounselingController::class, 'import_excel']);
    Route::get('/lecturers/export_excel', [LecturerController::class, 'export_excel']);
    Route::post('/lecturers/import_excel', [LecturerController::class, 'import_excel']);
    Route::get('/meetings/export_excel', [MeetingController::class, 'export_excel']);
    Route::post('/meetings/import_excel', [MeetingController::class, 'import_excel']);
    Route::get('/prayerRequests/export_excel', [PrayerRequestController::class, 'export_excel']);
    Route::post('/prayerRequests/import_excel', [PrayerRequestController::class, 'import_excel']);
    Route::get('/transactions/export_excel', [TransactionController::class, 'export_excel']);
    Route::post('/transactions/import_excel', [TransactionController::class, 'import_excel']);
});

//Landing Page
Route::get('/', [HomeController::class, 'index']);

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

Route::get('/events', [EventController::class, 'index']);

Route::get('/ministries', function () {
    return view('landing-page/ministries');
});

Route::get('/sermons', function () {
    return view('landing-page/sermons');
});
