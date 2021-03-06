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


Route::middleware('auth')->name('admin.')->prefix('panel')->namespace('Admin')->group(function () {
    Route::get('', 'AdminPanelController@dashboard')->name('dashboard');
    Route::resource('educations', 'EducationsController');
    Route::resource('teachers', 'TeachersController');
    Route::resource('rooms', 'RoomsController');
    Route::resource('rents', 'RentsController');

    Route::get('search', 'AdminPanelController@search')->name('search');

    Route::prefix('excel')->name('excel.')->group(function () {
        Route::get('export', 'ExcelController@export')->name('export');
        Route::post('import', 'ExcelController@import')->name('import');
        Route::get('import', 'ExcelController@importForm')->name('import.form');
    });
});


/**
 * Telegram 
 */

Route::post('/651957262:AAELCjsHoPbGxRNcsd4QYSmD964vmQVFH3o/webhook','TelegramController@webhook');
Route::get('setwebhook','TelegramController@setWebhook');





















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
