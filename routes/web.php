<?php

use App\Models\Invoice;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

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



Auth::routes();


Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home', 'HomeController@index')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	





});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);


	Route::resource('hospital', 'HospitalController');
	Route::resource('vendor', 'VendorController');
	Route::resource('banks', 'BankingController');
	Route::resource('materials', 'MaterialController');
	Route::resource('saleman', 'SalemanController');
	Route::resource('product', 'ProductController');
	Route::resource('invoice', 'InvoiceController');
	Route::resource('stock', 'StockController');
	Route::get('/invoice_pdf',[InvoiceController::class, 'invoice_pdf']);

});

