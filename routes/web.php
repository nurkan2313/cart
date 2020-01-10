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

Route::get('/', [
    'uses' => 'ProductController@home',
    'as' => 'product.home'
]);

Route::get('/add_cart/{id}', [
    'uses' => 'ProductController@addToCart',
    'as' => 'addToCart'
]);

Route::get('/remove_from_cart/{id}/{price}', [
    'uses' => 'ProductController@removeFromCart',
    'as' => 'removeFromCart'
]);

Route::get('/cart', [
    'uses' => 'ProductController@cart',
    'as' => 'cart'
]);

Route::get('/detail/{id}', [
    'uses' => 'ProductController@productDetail',
    'as' => 'detail'
]);
