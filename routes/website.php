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
// Font-End
Route::get('/home','App\Http\Controllers\Website\PageController@home')->name('home');
Route::get('/shop','App\Http\Controllers\Website\PageController@shop')->name('shop');
Route::get('/cart','App\Http\Controllers\Website\PageController@cart')->name('cart');
Route::get('/chackout','App\Http\Controllers\Website\PageController@chackout')->name('chackout');
Route::get('/contact','App\Http\Controllers\Website\PageController@contact')->name('contact');
Route::get('/privacypolicy','App\Http\Controllers\Website\PageController@privacypolicy')->name('privacypolicy');
Route::post('/adminprivecy','App\Http\Controllers\Admin\CmsController@editprivacy')->name('adminprivecy');

Route::get('/adminprivecy','App\Http\Controllers\Admin\CmsController@adminprivecy')->name('adminprivecy');
Route::get('/addbanner','App\Http\Controllers\Admin\CmsController@addbanner')->name('addbanner');
Route::post('/addbanner','App\Http\Controllers\Admin\CmsController@editbanner')->name('addbanner');