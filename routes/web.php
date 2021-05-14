<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfileController;

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
//Route::get('/users', function (){
//    $user = DB::table('users')->get();
//    return view('users.index',  ['users' => $user]);
//})->name('users');

Route::get('/create', function () {
    return view('users.create')->middleware(['auth','role:admin']);
});
//Route::delete('/users/id}',[UserController::class, 'destroy'])->name('delete');

Route::resource('profiles', ProfileController::class);
Route::get('/profiles', function (){
    return view('profiles.create')->middleware(['auth','role:admin']);
});
Route::get('/profiles/{id}',[ProfileController::class])->middleware((['auth','role:admin']))->name('profiles');
Route::get('/create', function () {
    return view('profiles.create');
})->middleware(['auth','role:admin']);

Auth::routes();

Route::get('/signin', [HomeController::class, 'index']);


Route::get('/admin',[AdminController::class, 'index'])->name('admin')->middleware('admin');
//Route::get('/loginadmin',[Admincontroller::class, 'login'])->name('admin')->middleware('admin');
//Route::get('/users',[UserController::class, 'index'])->name('users')->middleware('users');

//Route::get('user_detail/create',[UserDetailController::class,'create'])->middleware('auth')->name('user_detail.create');
//Route::post('user_detail',[UserDetailController::class,'store'])->middleware('auth');
//
//Route::get('education/create',[EducationController::class,'create'])->middleware('auth')->name('education.create');




