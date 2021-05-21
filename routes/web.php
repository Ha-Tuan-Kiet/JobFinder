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
Route::get('/jobdetails/{id}', [JobController::class,'showDetail'])->name('jobdetails');

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
    Route::match(['get', 'post'],'/postjob',[AdminController::class, 'postjob'])->name('postjob');
});

Route::get('/Cv',[CvController::class,'CvCreate'])->middleware('auth');
Route::post('/Cv/create',[CvController::class,'create'])->middleware('auth')->name('/Cv/create');
Route::get('/Cv/edit/{id}',[CvController::class,'edit'])->middleware('auth')->name('Cv/edit');
Route::post('/Cv/update/{id}',[CvController::class,'update'])->middleware('auth')->name('Cv/update');
Route::get('/Cv/Resume/{id}',[CvController::class,'showResume'])->middleware('auth')->name('/Cv/Resume/');
Route::get('/Cv/ShowAllCv',[CvController::class,'ShowAllCvCreated'])->middleware('auth')->name('/Cv/ShowAllCv');
Route::get('/Cv/DownloadResume/{id}',[CvController::class,'downloadResume'])->middleware('auth')->name('/Cv/DownloadResume/');


//Route::get('profiles',[ProfileController::class,'create'])->middleware('auth')->name('profiles.create');

Route::get('profiles/{id}',[ProfileController::class,'show'])->middleware('auth')->name('profiles');
Route::get('profiles/edit/{id}',[ProfileController::class,'edit'])->middleware('auth')->name('profiles.edit');
Route::post('profiles/update/{id}',[ProfileController::class,'update'])->middleware('auth')->name('profiles.update');
Route::get('profiles/create',[ProfileController::class,'create'])->middleware('auth')->name('profiles.create');
Route::post('profiles/create',[ProfileController::class,'create'])->middleware('auth')->name('profiles.create');
