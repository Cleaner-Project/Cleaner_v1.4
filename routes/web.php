<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AdminContorller;
use Illuminate\Support\Facades\Auth;

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::group(['web'], function(){

  
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
        Route::get('/',[App\Http\Controllers\AdminController::class,'admin'])->name('admin');
        Route::get('/dash',[App\Http\Controllers\AdminController::class,'dash'])->name('dashboard');
        Route::get('/list-user',[App\Http\Controllers\AdminController::class,'listuser'])->name('list-user');
        Route::get('/admin-boking',[App\Http\Controllers\AdminController::class,'booking'])->name('admin-booking');
        Route::get('/create-cleaner',[App\Http\Controllers\AdminController::class,'create_cleaner'])->name('create-cleaner');
    
    });

    Route::group(['prefix'=>'cleaner','middleware'=>['auth','cleaner']],function(){
        Route::get('/',[App\Http\Controllers\CleanerController::class,'cleaner'])->name('cleaner');
        Route::get('/new-booking',[App\Http\Controllers\CleanerController::class,'newbooking'])->name('new-booking');
        Route::get('/calendar',[App\Http\Controllers\CleanerController::class,'calendar'])->name('calendar');
        Route::get('/order',[App\Http\Controllers\CleanerController::class,'order'])->name('order');

    
    });

    Route::group(['prefix'=>'user','middleware'=>['auth','user']],function(){
        Route::get('/',[App\Http\Controllers\UserController::class,'user'])->name('user');
    
    });

    Route::post('/forms/contact', [App\Http\Controllers\ContactControllor::class ,'contactSumit'])->name('home.contact_submit');
    Route::get('ThanksYou',[App\Http\Controllers\ThanksController::class,'contactThanks'])->name('contact.thanks_you');
    

    Route::get('yourBuy',[App\Http\Controllers\UserController::class,'yourbuy'])->name('user.yourbuy');

    Route::resource('products', App\Http\Controllers\ProductController::class);

});

Auth::routes();