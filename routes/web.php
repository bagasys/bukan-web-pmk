<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecturerController;
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

Route::get('/admin', function () {
    return view('admin');
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

//Route lecturer
Route::resource('/lecturer', LecturerController::class);
