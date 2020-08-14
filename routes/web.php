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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/detail/{id}', 'DetailController@index')->name('detail');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/success', 'CartController@success')->name('success');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/product', 'DashboardProductController@index')->name('dashboard-prdouct');
Route::get('/dashboard/product/create', 'DashboardProductController@create')->name('dashboard-prdouct-create');
Route::get('/dashboard/product/{?id}', 'DashboardProductController@detail')->name('dashboard-prdouct-detail');

Route::get('/dashboard/transaction', 'DashboardTransactionController@index')->name('dashboard-transaction');
Route::get('/dashboard/transaction/{id}', 'DashboardTransactionController@details')->name('dashboard-transaction-details');

Route::get('/dashboard/settings', 'DashboardSettingController@store')->name('dashboard-setting-store');
Route::get('/dashboard/account', 'DashboardSettingController@account')->name('dashboard-setting-account');


Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');


//untuk admin
Route::prefix('admin')
		->namespace('admin')
		// ->middleware(['atuh','admin'])
		->group(function(){
			Route::get('/','DashboardController@index')->name('admin-dashboard');
		});
Auth::routes();