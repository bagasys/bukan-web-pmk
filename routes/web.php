<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CounselingController;
use App\Http\Controllers\CounselorController;
use App\Http\Controllers\FridayServiceReportController;
use App\Http\Controllers\LandingPage\BlogController;
use App\Http\Controllers\LandingPage\EventController;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\LandingPage\SermonController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\PostController;
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

    Route::get('/lecturers/export_excel', [LecturerController::class, 'export_excel'])->name('lecturers.export_excel');
    Route::post('/lecturers/import_excel', [LecturerController::class, 'import_excel'])->name('lecturers.import_excel');
    Route::resource('/lecturers', LecturerController::class);

    Route::get('/meetings/export_excel', [MeetingController::class, 'export_excel'])->name('meetings.export_excel');
    Route::post('/meetings/import_excel', [MeetingController::class, 'import_excel'])->name('meetings.import_excel');
    Route::resource('/meetings', MeetingController::class);

    Route::get('/counselings/export_excel', [CounselingController::class, 'export_excel'])->name('counselings.export_excel');
    Route::post('/counselings/import_excel', [CounselingController::class, 'import_excel'])->name('counselings.import_excel');
    Route::resource('/counselings', CounselingController::class);

    Route::get('/counselors/export_excel', [CounselorController::class, 'export_excel'])->name('counselors.export_excel');
    Route::post('/counselors/import_excel', [CounselorController::class, 'import_excel'])->name('counselors.import_excel');
    Route::resource('/counselors', CounselorController::class);

    Route::get('/alumnis/export_excel', [AlumniController::class, 'export_excel'])->name('alumnis.export_excel');
    Route::post('/alumnis/import_excel', [AlumniController::class, 'import_excel'])->name('alumnis.import_excel');
    Route::resource('/alumnis', AlumniController::class);

    Route::get('/students/export_excel', [StudentController::class, 'export_excel'])->name('students.export_excel');
    Route::post('/students/import_excel', [StudentController::class, 'import_excel'])->name('students.import_excel');
    Route::resource('/students', StudentController::class);

    Route::get('/transactions/export_excel', [TransactionController::class, 'export_excel'])->name('transactions.export_excel');
    Route::post('/transactions/import_excel', [TransactionController::class, 'import_excel'])->name('transactions.import_excel');
    Route::resource('/transactions', TransactionController::class);

    Route::get('/prayerRequests/export_excel', [PrayerRequestController::class, 'export_excel'])->name('prayerRequests.export_excel');
    Route::post('/prayerRequests/import_excel', [PrayerRequestController::class, 'import_excel'])->name('prayerRequests.import_excel');
    Route::resource('/prayer-requests', PrayerRequestController::class);

    Route::resource('/roles', RoleManagementController::class);

    Route::resource('/users', UserManagementController::class);
    Route::resource('/banners', BannerController::class);
    Route::resource('/posts', PostController::class);
    Route::resource('/fridayservicereports', FridayServiceReportController::class);
});

//Landing Page
Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('landing-page/about');
});

Route::get('/blog-single', function () {
    return view('landing-page/blog-single');
});

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/contact', function () {
    return view('landing-page/contact');
});

Route::get('/events', [EventController::class, 'index']);

Route::get('/ministries', function () {
    return view('landing-page/ministries');
});

Route::get('/sermons', [SermonController::class, 'index']);
