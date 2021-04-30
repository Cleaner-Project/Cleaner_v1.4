<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AdminContorller;
use Illuminate\Support\Facades\Auth;

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

Route::group(['web'], function(){

Route::get('/', [App\Http\Controllers\Frontend\IndexController::class, 'home'])->name('home');  

 

// Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware'=>['auth','admin']],function(){
     Route::get('/admin',[App\Http\Controllers\AdminController::class,'admin'])->name('admin');
     Route::get('/list-user',[App\Http\Controllers\AdminController::class,'listuser'])->name('list-user');
     Route::get('/admin-boking',[App\Http\Controllers\AdminController::class,'booking'])->name('admin-booking');
     Route::get('/create-cleaner',[App\Http\Controllers\AdminController::class,'create_cleaner'])->name('create-cleaner');
   
 });

 Route::group(['prefix'=>'cleaner','middleware'=>['auth','cleaner']],function(){
    Route::get('/',[App\Http\Controllers\CleanerController::class,'cleaner'])->name('cleaner');
  
});

Route::group(['prefix'=>'user','middleware'=>['auth','user']],function(){
    Route::get('/',[App\Http\Controllers\UserController::class,'user'])->name('user');
  
});

Route::post('/forms/contact', [App\Http\Controllers\ContactControllor::class ,'contactSumit'])->name('home.contact_submit');
Route::get('ThanksYou',[App\Http\Controllers\ThanksController::class,'contactThanks'])->name('contact.thanks_you');
Route::get('cleanerPage/work',[App\Http\Controllers\CleanerPageController::class,'CleanWork'])->name('clneaer.clean_work');

Route::get('Booking',[App\Http\Controllers\UserController::class,'booking'])->name('user.booking');

});

Auth::routes();