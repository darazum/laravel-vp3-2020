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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/good/{id}', 'GoodController@good')->name('good');
Route::get('/category/{id}', 'GoodController@category')->name('category');
Route::get('/order/buy/{id}', 'OrderController@buy')->name('buy');
Route::get('/order/current', 'OrderController@current')->name('order.current');
Route::get('/order/process', 'OrderController@process')->name('order.process');

Route::group(['middleware' => \App\Http\Middleware\AdminMiddleware::class], function () {
   Route::get('/admin/categories', 'AdminController@categories')->name('admin.categories');
   Route::get('/admin/goods', 'AdminController@categories')->name('admin.categories');
});
