<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AdminContorller;
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
    Route::get('/', function () {
        return view('p-welcome');
    });   
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin','middleware'=>'auth','admin'],function(){
     Route::get('/',[App\Http\Controllers\AdminController::class,'admin'])->name('admin');
   
 });

 Route::group(['prefix'=>'cleaner','middleware'=>'auth','cleaner','cleaner'],function(){
    Route::get('/',[App\Http\Controllers\CleanerController::class,'cleaner'])->name('cleaner');
  
});

Route::group(['prefix'=>'user','middleware'=>'auth','admin','user'],function(){
    Route::get('/',[App\Http\Controllers\UserController::class,'user'])->name('user');
  
});

Route::post('/forms/contact', [App\Http\Controllers\FormController::class ,'contactSumit'])->name('home.contact_submit');

// Route::get('/admin', [ 'as' => 'admin','middleware'=>'auth', 'uses' => 'AdminController@admin'])->name('admin');

// Route::get('/', function () {
//     return view('dashboard');
// });

});
Auth::routes();
