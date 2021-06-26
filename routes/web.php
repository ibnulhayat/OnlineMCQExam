<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Registration;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\UserController;

use App\Http\Controllers\CoponController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
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

// Route::get('/clear-cache', function() {
//  Artisan::call('cache:clear');
//  Artisan::call('config:clear');
//  Artisan::call('config:cache');
//  Artisan::call('view:clear');
//  return "Cache is cleared";
// });

Route::get('/loginData',[Login::class,'Data']);

Route::get('/log',[Login::class,'Data']);

Route::get('/', [Login::class,'index']);
Route::get('/login', [Login::class,'index'])->name('login');
Route::post('/logincheck',[Login::class,'loginCheck'])->name('logincheck');


Route::get('/registration', [Registration::class,'index'])->name('registration');
Route::post('/store', [Registration::class,'Store'])->name('store');


Route::group(['middleware'=>'admin'],function(){

   //Dashboard
   Route::get('/dashboard',[Dashboard::class,'index'])->name('dashboard');
   Route::get('/set-exam-paper',[Dashboard::class,'setExamPaper']);
   Route::post('/store-exam-paper',[Dashboard::class,'storeExamPaper'])->name('store-exam-paper');
   
   //logout
   Route::get('/logout',[Login::class,'logout'] );

   //User route
   Route::get('user-list',[UserController::class,'index']);
   Route::get('user/status/{type}/{id}',[UserController::class,'status']);



});
