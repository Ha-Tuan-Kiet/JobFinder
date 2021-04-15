<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
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
Route::get('/findajob', function () {
    return view('home.findajob');
});
Route::get('/about', function () {
    return view('home.about');
});


Route::get('/users', function (){

    $users = DB::table('users')->get();
    return view('user.userlist',  ['users' => $users]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);