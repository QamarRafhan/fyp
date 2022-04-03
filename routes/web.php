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

Route::get('/location', 'HomeController@location')->name('location');
Auth::routes();


Route::get('/home', 'HomeController@index')->middleware('auth');
Route::get('/dashboard', 'HomeController@index')->middleware('auth');
Route::get('/donors', 'DonorController@donors')->name('donors');


Route::get('/bloodrequest/{donor}', 'DonorController@bloodrequest')->name('bloodrequest');
Route::get('/hospitalbloodrequest/{donor}/{hospital}', 'BloodController@bloodrequest')->name('hospitalbloodrequest');



Route::group(['middleware' => 'auth'], function () {
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);


	Route::resource('hospital', 'HospitalController');
	Route::resource('blood', 'BloodController');
	Route::resource('donation', 'DonationController')->except([
		'create'
	]);;
});
