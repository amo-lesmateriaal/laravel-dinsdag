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

Route::get('/me', 'ProfileController@show');

Route::get('/products', 'ProductController@index');

Route::get('/product/create', 'ProductController@create');

Route::post('/product/store', 'ProductController@store')->name('product.store');

Route::get('/product/{id}', 'ProductController@show')->name('product');

/*
 * - Maak products/index.blade.php fancy
 * - Maak alle benodigdheden voor categories: views, route, controller etc... (hetzelfde als bij Product)
 */




