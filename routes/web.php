<?php

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



Route::get('/dashboard',function(){
    return view('admin.dashboard');
});


Route::name('admin.')->prefix('admin')->namespace('Admin')->group(function(){
    Route::get('','AdminPanelController@dashboard')->name('dashboard');
    Route::resource('educations','EducationsController');
    Route::resource('teachers','TeachersController');
    Route::resource('rooms','RoomsController');
    Route::resource('rents','RentsController');
});