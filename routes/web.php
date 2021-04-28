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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin',[App\Http\Controllers\AdminContorller::class,'admin']);



Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
     Route::get('/',[App\Http\Controllers\AdminController::class,'admin'])->name('admin');
    //  Route::resource('admin','AdminContorller');
 });



// Route::get('/admin', [ 'as' => 'admin','middleware'=>'auth', 'uses' => 'AdminController@admin'])->name('admin');

// Route::get('/', function () {
//     return view('dashboard');
// });
