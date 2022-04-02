<?php

use App\Models\Invoice;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\Home2Controller;


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




Route::get('/', 'HomeController@index2')->name('home');

Route::get('/location', 'HomeController@location')->name('home');
Auth::routes();


Route::get('/home', 'HomeController@index')->middleware('auth');
Route::get('/dashboard', 'HomeController@index')->middleware('auth');
Route::get('/donors', 'DonorController@donors')->name('donors');
Route::get('/hospitalbloodrequest', 'BloodController@bloodrequest')->name('hospitalbloodrequest');
Route::get('/bloodrequest', 'DonorController@bloodrequest')->name('bloodrequest');
Route::group(['middleware' => 'auth'], function () {
	


});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);


	Route::resource('hospital', 'HospitalController');
	Route::resource('donor', 'DonorController');
	Route::resource('blood', 'BloodController');
	Route::resource('receptor', 'ReceptorController');
	Route::resource('donation', 'DonationController');

	

});

