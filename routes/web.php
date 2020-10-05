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

//punya salvation
Route::get('/about', function () {
    return view('salvation/about');
});

Route::get('/blog-single', function () {
    return view('salvation/blog-single');
});

Route::get('/blog', function () {
    return view('salvation/blog');
});

Route::get('/contact', function () {
    return view('salvation/contact');
});

Route::get('/events', function () {
    return view('salvation/events');
});

Route::get('/index', function () {
    return view('salvation/index');
});

Route::get('/main', function () {
    return view('salvation/main');
});

Route::get('/ministries', function () {
    return view('salvation/ministries');
});

Route::get('/sermons', function () {
    return view('salvation/sermons');
});

Route::resource('/lecturer', LecturerController::class);