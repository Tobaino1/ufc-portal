<?php

use Illuminate\Support\Facades\Route;

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

// Auth::routes();


 
 Route::get('team', 'App\Http\Controllers\PlayerController@requestPlayers')->name('team'); //viewforallplayers
 Route::get('story', 'App\Http\Controllers\NewstoryController@requestnews')->name('story'); //viewforallNews
 Route::get('contact', 'App\Http\Controllers\ContactController@contactus')->name('contact'); //viewforcontact


//Admin 6
Route::get('AdminPage', 'App\Http\Controllers\AdminController@AdminPage')->name('AdminPage'); //news
Route::resource('players', 'App\Http\Controllers\PlayerController'); //crudForPlayer
Route::resource('news', 'App\Http\Controllers\NewstoryController'); //crudForNews





Route::post('/store', 'App\Http\Controllers\AdminController@store'); //add admin
Route::get('/admin_login', 'App\Http\Controllers\AdminController@admin_login')->name('admin_login'); //admin login
Route::get('/ufc_admin_add_pg', 'App\Http\Controllers\AdminController@ufc_admin_add_pg')->name('ufc_admin_add_pg');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
