<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CvController;
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

// Route::get('/home', function () {
//     return view('home.mainpage');
// });
Route::get('/',[JobController::class,'index']) ;
Route::get('/pagination',[JobController::class,'paginate_data']);
Route::get('pagination/fetch_data',[JobController::class,'fetch_data']);
Route::post('pagination/fetch_data',[JobController::class,'filter_jobs']);
// Route::get('/', function () {
//     return view('home.mainpage');
// });
Route::get('/careersjob',[JobController::class,'showAllCareers']);
Route::get('/findajob/{id}', [JobController::class,'showDetailCareers']);

// Route::get('/findajob', function () {
//     return view('home.findajob');
// });
Route::get('/about', function () {
    return view('home.about');
});
Route::get('/blog', function () {
    return view('home.blog');
});
Route::get('/blogdetails', function () {
    return view('home.blogdetails');
});
Route::get('/elements', function () {
    return view('home.elements');
});
Route::get('/jobdetails/{id}/career/{eventid}', [JobController::class,'showDetail'])->name('jobdetails');

Route::get('/contact', function () {
    return view('home.contact');
});

Route::get('/search',[SearchController::class,'search'])->name('search');


Route::resource('users', UserController::class)->middleware(['auth','role:admin']);

Route::get('/create', function () {
    return view('users.create');
})->middleware(['auth','role:admin']);
//Route::delete('/users/id}',[UserController::class, 'destroy'])->name('delete');
Auth::routes();

Route::get('/signin', [HomeController::class, 'index']);


Route::group(['middleware'=>'admin'],function(){
    Route::get('/admin',[AdminController::class, 'dashboard']);
    Route::get('/admin/joblist',[AdminController::class,'showJoblist']);
    Route::get('/edit-job/{id}',[AdminController::class,'editJob']);
    Route::post('/update-job/{id}',[AdminController::class,'updateJob']);
    Route::get('/delete-job/{id}',[AdminController::class,'deleteJob']);
    Route::get('/admin/job_application',[AdminController::class,'job_application']);
    Route::get('/admin/application_details/{id}',[AdminController::class,'show_application_details']);
    Route::post('/admin/response_job_application',[AdminController::class,'response_job_application'])->name('/admin/response_job_application');
    Route::match(['get', 'post'],'/postjob',[AdminController::class, 'postjob'])->name('postjob');
});

Route::get('/Cv',[CvController::class,'CvCreate'])->middleware('auth');
Route::post('/Cv/create',[CvController::class,'create'])->middleware('auth')->name('/Cv/create');
Route::get('/Cv/edit/{id}',[CvController::class,'edit'])->middleware('auth')->name('Cv/edit');
Route::post('/Cv/update/{id}',[CvController::class,'update'])->middleware('auth')->name('Cv/update');
Route::get('/Cv/Resume/{id}',[CvController::class,'showResume'])->middleware('auth')->name('/Cv/Resume/');
Route::get('/Cv/ShowAllCv',[CvController::class,'ShowAllCvCreated'])->middleware('auth')->name('/Cv/ShowAllCv');
Route::get('/Cv/DownloadResume/{id}',[CvController::class,'downloadResume'])->middleware('auth')->name('/Cv/DownloadResume/');
route::get('/Cv/DeleteResume/{id}',[CvController::class,'delete_resume'])->middleware('auth')->name('/Cv/delete_resume/');
Route::post('/Cv/ApplyJob',[CvController::class,'apply_job'])->middleware('auth')->name('/Cv/ApplyJob');
Route::get('/Cv/showMessages',[CvController::class,'show_messages'])->middleware('auth')->name('/Cv/showMessages');
Route::get('/Cv/showMessages_detail/{id}',[CvController::class,'show_messages_detail'])->middleware('auth')->name('/Cv/showMessages_detail');
Route::get('/Cv/showMessages_delete/{id}',[CvController::class,'delete_message'])->middleware('auth')->name('/Cv/showMessages_delete');
Route::get('/CV/job_applied',[CvController::class,'applied_job'])->middleware('auth')->name('/CV/job_applied');
Route::get('/CV/job_applied_detail/{id}',[CvController::class,'applied_job_detail'])->middleware('auth')->name('/CV/job_applied_detail');
Route::get('/Cv/job_applied_cancel/{id}',[CvController::class,'cancel_job_applied'])->middleware('auth')->name('/Cv/job_applied_cancel');
Route::post('/Cv/add_favorite_job/{id}',[CvController::class,'add_favorite_job'])->middleware('auth')->name('/Cv/add_favorite_job/');
Route::get('/Cv/showFavorite_job',[CvController::class,'show_favorite_job'])->middleware('auth')->name('/Cv/showFavorite_job');
route::get('/Cv/deleteFavorite_job/{id}',[CvController::class,'delete_favorite_job'])->middleware('auth')->name('/Cv/deleteFavorite_job/');
//Route::get('profiles',[ProfileController::class,'create'])->middleware('auth')->name('profiles.create');

Route::get('profiles/{id}',[ProfileController::class,'show'])->middleware('auth')->name('profiles');
Route::get('profiles/edit/{id}',[ProfileController::class,'edit'])->middleware('auth')->name('profiles.edit');
Route::post('profiles/update/{id}',[ProfileController::class,'update'])->middleware('auth')->name('profiles.update');
Route::get('profiles/create',[ProfileController::class,'create'])->middleware('auth')->name('profiles.create');
Route::post('profiles/create',[ProfileController::class,'create'])->middleware('auth')->name('profiles.create');
