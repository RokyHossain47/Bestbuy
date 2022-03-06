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

// Route::get('/', function () {
//     //return view('layouts/website/index');
// });
Route::get('/','App\Http\Controllers\Website\PageController@home')->name('home');

Route::get('/admin','App\Http\Controllers\Admin\Authcontroller@index')->name('adminlogin');
Route::post('/admin','App\Http\Controllers\Admin\Authcontroller@postlogin')->name('adminlogin');
Route::get('/dashboard','App\Http\Controllers\Admin\DashboardController@index')->name('dashboard');