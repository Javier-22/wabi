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

Route::get('welcome','HomeController@index')->name('welcome');
Route::get('about','AboutController@index')->name('about.about');
Route::get('contact','ContactController@index')->name('contact.contact');
Route::get('car','CarController@index')->name('car');


Route::get('product','ProductController@index')->name('product');
Route::get('productca1','ProductController@indexa1')->name('productos.productca1');
Route::get('productca2','ProductController@indexa2')->name('productos.productca2');
Route::get('productcca3','ProductController@indexa3')->name('productos.productca3');
Route::get('productca4','ProductController@indexa4')->name('productos.productca4');
Route::get('productca5','ProductController@indexa5')->name('productos.productca5');
Route::get('productcb1','ProductController@indexb1')->name('productos.productcb1');
Route::get('productccb2','ProductController@indexb2')->name('productos.productcb2');
Route::get('productcc1','ProductController@indexc1')->name('productos.productcc1');
Route::get('productcc2','ProductController@indexc2')->name('productos.productcc2');
Route::get('productcc3','ProductController@indexc3')->name('productos.productcc3');
Route::get('productcc4','ProductController@indexcc4')->name('productos.productcc4');

