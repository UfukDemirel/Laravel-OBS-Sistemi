<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Frontend\ImageUploadController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Search\SearchController;
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
//Route::get('/', function () {
//    return view('welcome');
//});

Route::prefix('/')->middleware('isUser')->group(function (){
Route::get('home',[HomeController::class,"home"])->name('home');
Route::get('user',[HomeController::class,"user"])->name('user');
Route::get('useredit',[HomeController::class,"useredit"])->name('useredit');
Route::post('usereditpost',[HomeController::class,"usereditpost"])->name('usereditpost');
Route::get('update',[LoginController::class,"update"])->name('update');
Route::post('updatepost',[LoginController::class,"updatepost"])->name('updatepost');
Route::get('dropzone',[ImageUploadController::class,"dropzone"])->name('dropzone');
Route::post('store',[ImageUploadController::class,"store"]);
Route::get('exit',[LoginController::class,"exit"])->name('exit');
Route::get('class',[HomeController::class,"class"])->name('class');
Route::post('classpost',[HomeController::class,"classpost"])->name('classpost');
Route::get('edit',[HomeController::class,"edit"])->name('edit');
Route::post('editpost',[HomeController::class,"editpost"])->name('editpost');
Route::get('delete/{id}',[HomeController::class,"delete"])->name('delete');
Route::post('record',[HomeController::class,"record"])->name('record');
});

Route::prefix('/')->middleware('isLogout')->group(function (){
Route::get('login',[LoginController::class,"login"])->name('login');
Route::post('loginpost',[LoginController::class,"loginpost"])->name('loginpost');
Route::get('register',[LoginController::class,"register"])->name('register');
Route::post('registerpost',[LoginController::class,"registerpost"])->name('registerpost');
Route::get('error',[LoginController::class,"error"])->name('error');
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
});

Route::get('dashboard',[AdminController::class,"dashboard"])->name('dashboard');
Route::post('dashboardpost',[AdminController::class,"dashboardpost"])->name('dashboardpost');
Route::get('student',[AdminController::class,"student"])->name('student');
Route::get('studentdetails/{id}',[AdminController::class,"studentdetails"])->name('studentdetails');
Route::post('studentdetailspost/{id}',[AdminController::class,"studentdetailspost"])->name('studentdetailspost');
Route::get('facultys',[AdminController::class,"facultys"])->name('facultys');
Route::get('facultysdetails/{id}',[AdminController::class,"facultysdetails"])->name('facultysdetails');
Route::post('facultysdetailspost/{id}',[AdminController::class,"facultysdetailspost"])->name('facultysdetailspost');
Route::get('episode',[AdminController::class,"episode"])->name('episode');
Route::get('episodedetails/{id}',[AdminController::class,"episodedetails"])->name('episodedetails');
Route::post('episodedetailspost/{id}',[AdminController::class,"episodedetailspost"])->name('episodedetailspost');
Route::get('dropzoneadmin',[ImageController::class,"dropzoneadmin"])->name('dropzoneadmin');
Route::post('storeadmin',[ImageController::class,"storeadmin"]);
Route::get('profile',[AdminController::class,"profile"])->name('profile');
Route::post('profilepost',[AdminController::class,"profilepost"])->name('profilepost');

Route::get('searchfaculty',[SearchController::class,"searchfaculty"])->name('searchfaculty');
Route::get('searchepisode',[SearchController::class,"searchepisode"])->name('searchepisode');
Route::get('searchstudent',[SearchController::class,"searchstudent"])->name('searchstudent');
