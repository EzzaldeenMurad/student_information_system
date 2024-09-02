<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeatcherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return  redirect()->route('login');
});

// Route::middleware()
Auth::routes([]);

Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->name('home');
});


Route::resource('faculty', FacultyController::class);
Route::resource('section', SectionController::class);
Route::resource('teatcher', TeatcherController::class);
Route::resource('student', StudentController::class);
Route::resource('course', CourseController::class);
Route::resource('exam', ExamController::class);
