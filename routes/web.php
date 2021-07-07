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
Route::get('/applications', [App\Http\Controllers\UniversityController::class,'viewApplications'])->middleware('university');
Route::get('/applicant/{student}/{id}', [App\Http\Controllers\UniversityController::class,'viewApplicant'])->middleware('university');
Route::post('/accept-application', [App\Http\Controllers\UniversityController::class,'acceptApplication'])->name('accept.application')->middleware('university');
Route::get('/accepted-applications', [App\Http\Controllers\UniversityController::class,'AcceptedApplications'])->middleware('university');
Route::get('/scholarships', [App\Http\Controllers\UniversityController::class,'scholarships'])->middleware('university');
Route::post('/add-scholarships', [App\Http\Controllers\UniversityController::class,'StoreScholarships'])->name('store.scholarship')->middleware('university');
Route::get('/delete/scholarship/{id}',[App\Http\Controllers\UniversityController::class,'DeleteScholarships'])->middleware('university');

// Admin Routes
Route::post('/add-category', [App\Http\Controllers\CategoryController::class, 'store'])->name('add.category')->middleware('admin');
Route::post('/add-discipline', [App\Http\Controllers\DisciplineController::class, 'store'])->name('add.discipline')->middleware('admin');
Route::get('/students-list',[App\Http\Controllers\AdminController::class, 'studentList'])->middleware('admin');
Route::get('/university-list',[App\Http\Controllers\AdminController::class, 'universityList'])->middleware('admin');
Route::get('/discipline-list',[App\Http\Controllers\AdminController::class, 'disciplineList'])->middleware('admin');
Route::get('/delete-university/{id}', [App\Http\Controllers\AdminController::class,'deleteUni'])->middleware('admin');
Route::get('/view-university-details/{id}', [App\Http\Controllers\AdminController::class, 'viewUni'])->middleware('admin');
Route::get('/manage-country', [App\Http\Controllers\AdminController::class, 'manageCountry'])->middleware('admin');
Route::post('/add-country', [App\Http\Controllers\AdminController::class, 'storeCountry'])->name('store.country')->middleware('admin');
Route::get('/Ranked-University',[App\Http\Controllers\AdminController::class, 'RankedUni'])->middleware('admin');
Route::post('/store-ranked-university', [App\Http\Controllers\AdminController::class, 'storeRanking'])->name('store.rankeduni')->middleware('admin');
Route::get('/edit-ranking/{id}',[App\Http\Controllers\AdminController::class, 'editranking'])->middleware('admin');
Route::post('/update-ranking',[App\Http\Controllers\AdminController::class, 'updateRanking'])->name('update.rank')->middleware('admin');
Route::get('/delete-ranking/{id}',[App\Http\Controllers\AdminController::class, 'deleteRanking'])->middleware('admin');
Route::post('/Post-Study',[App\Http\Controllers\AdminController::class, 'storeStudy'])->name('store.study')->middleware('admin');
Route::post('/Post-Living',[App\Http\Controllers\AdminController::class, 'storeLiving'])->name('store.living')->middleware('admin');
Route::post('/Post-About',[App\Http\Controllers\AdminController::class, 'storeAbout'])->name('store.about')->middleware('admin');
Route::post('/Post-Visa',[App\Http\Controllers\AdminController::class, 'storeVisa'])->name('store.visa')->middleware('admin');
Route::post('/Post-Work-Permit',[App\Http\Controllers\AdminController::class, 'storeWP'])->name('store.wpermit')->middleware('admin');
Route::post('/Post-How-to-Apply',[App\Http\Controllers\AdminController::class, 'storeHTA'])->name('store.hTApply')->middleware('admin');
Route::post('/Post-University-Doc',[App\Http\Controllers\AdminController::class, 'storeUniD'])->name('store.university')->middleware('admin');
Route::get('/view-student/{id}',[App\Http\Controllers\AdminController::class, 'ViewStudent'])->middleware('admin');
Route::get('/delete-student/{id}',[App\Http\Controllers\AdminController::class,'DeleteStudent'])->middleware('admin');

Route::get('/search-master-degree/{discipline}', [App\Http\Controllers\ProgramController::class, 'viewProgram']);
Route::get('/search-country/{country}', [App\Http\Controllers\ProgramController::class, 'viewCountry']);
Route::get('/program-details/{id}', [App\Http\Controllers\ProgramController::class, 'programDetails']);
Route::get('/search-Ranked-University/{country}', [App\Http\Controllers\ProgramController::class, 'viewRnkdinCountry']);
Route::get('/University-view/{university}', [App\Http\Controllers\ProgramController::class, 'UniversityView']);

Route::post('/add-faculty', [App\Http\Controllers\DisciplineController::class, 'storeFaculty'])->name('add.departments');




//Student Routes
Route::get('/Edit-Profile/{id}',[App\Http\Controllers\StudentController::class, 'editProfile'])->middleware('student');

Route::post('/profile-update',[App\Http\Controllers\StudentController::class, 'updateProfile'])->name('update.Sprofile')->middleware('student');

Route::get('/add-to-wishlist/{id}',[App\Http\Controllers\StudentController::class, 'addWishList'])->middleware('student');
Route::get('/wish-List',[App\Http\Controllers\StudentController::class, 'viewWishList'])->middleware('student');
Route::get('/applied-program',[App\Http\Controllers\StudentController::class, 'viewApplied'])->middleware('student');
Route::post('/Apply-Program',[App\Http\Controllers\StudentController::class, 'applyProgram'])->name('apply.program')->middleware('student');
Route::get('/Delete-Wished-Program/{id}',[App\Http\Controllers\StudentController::class, 'DeleteWishedProgram'])->middleware('student');
Route::get('/student-notifications',[App\Http\Controllers\StudentController::class, 'Notifications'])->middleware('student');

Route::get('/all-you-need-to-know-about-the-european-credit-system-ects', function () {
    return view('Article1');
});
Route::get('/what-are-online-microcredentials-should-i-study-one-in-2021', function () {
    return view('Article2');
});
Route::get('/how-can-i-get-into-engineering-management', function () {
    return view('Article3');
});
Route::get('/about-us', function () {
    return view('About');
});
Route::get('/student-review', function (){
   return view('StudentReview');
});
Route::get('/transcript-of-record', function (){
    return view('TranscriptRecord');
});
Route::get('/motivation-letter', function (){
    return view('MotivationLetter');
});
Route::get('/acceptance-tips', function (){
    return view('AcceptanceTips');
});
Route::get('/what-documents-do-you-need-to-apply-for-a-university-abroad', function (){
    return view('DocumentsneedtoApply');
});
Route::get('/steps-to-write-cv', function (){
    return view('StepstoWCV');
});
Route::get('/search-data', [App\Http\Controllers\ProgramController::class, 'SearchData']);

Route::get('/masters-discipline/{discipline}',[App\Http\Controllers\ProgramController::class, 'SearchDiscipline']);

Route::get('/university-scholarship/{university}',[App\Http\Controllers\ProgramController::class, 'UniversityScholarship']);
Route::get('/search',[App\Http\Controllers\ProgramController::class, 'SearchProgramsCountry'])->name('program.search');

Route::get('/search-master-degree/{discipline}/locations', [App\Http\Controllers\ProgramController::class, 'filterLocation']);

Route::get('/countries/all', [App\Http\Controllers\ProgramController::class, 'AllCountries']);
