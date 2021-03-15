<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student')->middleware('student');
Route::get('/university', [App\Http\Controllers\UniversityController::class, 'index'])->name('university')->middleware('university');



//login with google
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
//login with facebook
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);
//login with linkedin
Route::get('login/linkedin', [App\Http\Controllers\Auth\LoginController::class, 'redirectToLinkedin'])->name('login.linkedin');
Route::get('login/linkedin/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleLinkedinCallback']);

//University routes
Route::get('/edit-profile/{id}', [App\Http\Controllers\UniversityController::class, 'profile'])->middleware('university');
Route::post('/profile/update/{id}', [App\Http\Controllers\UniversityController::class, 'updateProfile'])->middleware('university');
Route::post('/add-programs', [App\Http\Controllers\UniversityController::class, 'storeProgram'])->name('add.programs')->middleware('university');
Route::get('/program-posts/{id}',[App\Http\Controllers\UniversityController::class, 'programPosts'])->middleware('university');
Route::get('/edit-program-post/{id}',[App\Http\Controllers\UniversityController::class, 'editPost'])->middleware('university');
Route::post('/program/update/{id}', [App\Http\Controllers\UniversityController::class, 'updateProgram'])->middleware('university');
Route::get('/delete-program/{id}', [App\Http\Controllers\UniversityController::class,'deletePost'])->middleware('university');
Route::get('/discipline', [App\Http\Controllers\UniversityController::class,'listDiscipline'])->middleware('university');

// Admin Routes
Route::post('/add-category', [App\Http\Controllers\CategoryController::class, 'store'])->name('add.category')->middleware('admin');
Route::post('/add-discipline', [App\Http\Controllers\DisciplineController::class, 'store'])->name('add.discipline')->middleware('admin');
Route::get('/students-list',[App\Http\Controllers\AdminController::class, 'studentList'])->middleware('admin');
Route::get('/university-list',[App\Http\Controllers\AdminController::class, 'universityList'])->middleware('admin');
Route::get('/discipline-list',[App\Http\Controllers\AdminController::class, 'disciplineList'])->middleware('admin');
Route::get('/delete-university/{id}', [App\Http\Controllers\AdminController::class,'deleteUni'])->middleware('admin');
Route::get('/view-university-details/{id}', [App\Http\Controllers\AdminController::class, 'viewUni'])->middleware('admin');

Route::get('/search-master-degree', function () {
    return view('VisitByDiscipline');
});
Route::get('/countries', function () {
    return view('viewByCountry');
});
Route::get('/disciplines', function () {
    return view('VisitByDiscipline');
});
Route::get('/studies', function () {
    return view('studiesDetails');
});
