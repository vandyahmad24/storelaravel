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
Route::get('/categories', 'CategoryController@index')->name('category');
Route::get('/categories/{id}', 'CategoryController@detail')->name('category-detail');
Route::get('/detail/{id}', 'DetailController@index')->name('detail');
Route::post('/detail/{id}', 'DetailController@add')->name('detail-add');

Route::get('/success', 'CartController@success')->name('success');


Route::post('/checkout/callback', 'CheckoutController@callback')->name('midtrans-callback');



Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

Route::group(['middleware'=>['auth']], function(){
	Route::get('/cart', 'CartController@index')->name('cart');
	Route::delete('/cart/delete/{id}', 'CartController@delete')->name('cart-delete');
	Route::post('/checkout', 'CheckoutController@process')->name('checkout');
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

	Route::get('/dashboard/product', 'DashboardProductController@index')->name('dashboard-prdouct');
	Route::get('/dashboard/product/create', 'DashboardProductController@create')->name('dashboard-prdouct-create');
	Route::get('/dashboard/product/{id}', 'DashboardProductController@detail')->name('dashboard-prdouct-detail');
	Route::post('/dashboard/product/{id}', 'DashboardProductController@update')->name('dashboard-product-update');

	Route::post('/dashboard/product/gallery/upload', 'DashboardProductController@uploadGallery')->name('dashboard-product-gallery-upload');

	Route::get('/dashboard/product/gallery/delete/{id}', 'DashboardProductController@deleteGallery')->name('dashboard-delete-product-gallery');

	Route::get('/dashboard/transaction', 'DashboardTransactionController@index')->name('dashboard-transaction');
	Route::get('/dashboard/transaction/{id}', 'DashboardTransactionController@details')->name('dashboard-transaction-details');

	Route::get('/dashboard/settings', 'DashboardSettingController@store')->name('dashboard-setting-store');
	Route::get('/dashboard/account', 'DashboardSettingController@account')->name('dashboard-setting-account');

});

//untuk admin
Route::prefix('admin')
		->namespace('admin')
		->middleware(['auth','admin'])
		->group(function(){
			Route::get('/','DashboardController@index')->name('admin-dashboard');
			Route::resource('category','CategoryController');
			Route::resource('user','UserController');
			Route::resource('product','ProductController');
			Route::resource('product-gallery','ProductGalleryController');
		});
Auth::routes();