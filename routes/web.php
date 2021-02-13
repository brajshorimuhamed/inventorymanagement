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

Route::get('/account', 'AccountController@index');
Route::post('/account', 'AccountController@checkLogin');
Auth::routes();

Route::get('/account/logout', 'AccountController@logout');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/categories/create', 'CategoryController@create');
Route::post('/categories/create', 'CategoryController@store');

Route::resource('/products', 'ProductController');
//Route::get('/products/create', 'ProductController@create');
//Route::post('/products/create', 'ProductController@store');

Route::resource('/stocks', 'StockController');
//Route::get('/stocks/create', 'StockController@create');
//Route::post('/stocks/create', 'StockController@store');

