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


Route::get('/', [Login::class,'index']);
Route::get('/login', [Login::class,'index'])->name('login');
Route::post('/logincheck',[Login::class,'loginCheck'])->name('logincheck');


Route::get('/registration', [Registration::class,'index'])->name('registration');
Route::post('/store', [Registration::class,'Store'])->name('store');


Route::group(['middleware'=>'admin'],function(){

   //Dashboard
   Route::get('/dashboard',[Dashboard::class,'index'])->name('dashboard');
   Route::get('/set-exam-paper',[Dashboard::class,'setExamPaper']);
   Route::post('/store-exam-paper',[ColorController::class,'storeExamPaper'])->name('storeExamPaper');
   //login
   Route::get('/logout',[Login::class,'logout'] );



    //User route
   Route::get('user-list',[UserController::class,'index']);
   Route::get('user/status/{type}/{id}',[UserController::class,'status']);


   // 

   Route::get('category/manage_category',[CategoryController::class,'manage_category']);
   Route::get('admin/category/manage_category/{id}',[CategoryController::class,'manage_category']);
   Route::post('admin/category/manage_category_process',[CategoryController::class,'manage_category_process'])->name('category.manage_category_process');
   Route::get('admin/category/delete/{id}',[CategoryController::class,'delete']);
   Route::get('admin/category/status/{type}/{id}',[CategoryController::class,'status']);


    ////copon
   Route::get('admin/coupon',[CoponController::class,'index']);
   Route::get('admin/coupon/manage_coupon',[CoponController::class,'manage_coupon']);
   Route::get('admin/coupon/manage_coupon/{id}',[CoponController::class,'manage_coupon']);
   Route::post('admin/coupon/manage_coupon_process',[CoponController::class,'manage_coupon_process'])->name('coupon.manage_coupon_process');
   Route::get('admin/coupon/delete/{id}',[CoponController::class,'delete']);
   Route::get('admin/coupon/status/{type}/{id}',[CoponController::class,'status']);
    //size
   Route::get('admin/size',[SizeController::class,'index']);
   Route::get('admin/size/manage_size',[SizeController::class,'manage_size']);
   Route::get('admin/size/manage_size/{id}',[SizeController::class,'manage_size']);
   Route::post('admin/size/manage_size_process',[SizeController::class,'manage_size_process'])->name('size.manage_size_process');
   Route::get('admin/size/delete/{id}',[SizeController::class,'delete']);
   Route::get('admin/size/status/{type}/{id}',[SizeController::class,'status']);
    //color
   Route::get('color',[ColorController::class,'index']);
   Route::get('admin/color/manage_color',[ColorController::class,'manage_color']);
   Route::get('admin/color/manage_color/{id}',[ColorController::class,'manage_color']);
   Route::post('admin/color/manage_color_process',[ColorController::class,'manage_color_process'])->name('color.manage_color_process');
   Route::get('admin/color/delete/{id}',[ColorController::class,'delete']);
   Route::get('admin/color/status/{status}/{id}',[ColorController::class,'status']);






});
