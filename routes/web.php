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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[JobController::class,'index']) ;
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

// Route::get('/userprofile', function () {return view('user.userprofile');})->middleware(['auth','role:user']);



// Route::get('/users', function (){
//     $users = DB::table('users')->get();
//     return view('user.userlist',  ['users' => $users]);
// });

Auth::routes();

Route::get('/signin', [HomeController::class, 'index']);


Route::resource('users', UserController::class)->middleware(['auth','role:user']);
Route::resource('profiles', ProfileController::class)->middleware(['auth', 'role:user']);

//Route::get('/loginadmin',[Admincontroller::class, 'login'])->name('admin')->middleware('admin');
// Route::get('/user',[UserController::class, 'index'])->name('user')->middleware('user');

// Route::get('/form', function () {
//     return view('admin.form');
// });

Route::get('/admin',[AdminController::class, 'login']);
Route::get('/dashboard',[AdminController::class, 'dashboard']);
Route::get('/postjob',[AdminController::class, 'postjob']);