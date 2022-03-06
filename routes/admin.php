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

Route::get('/logout','App\Http\Controllers\Admin\DashboardController@logout')->name('logout');
Route::get('/manageproducts','App\Http\Controllers\Admin\ProductController@manageproducts')->name('manageproducts');

route::get('/addproduct','App\Http\Controllers\Admin\ProductController@index')->name('addproduct');
Route::post('/addproduct','App\Http\Controllers\Admin\ProductController@addproduct')->name('addproduct');
Route::get('/editproduct/{id}','App\Http\Controllers\Admin\ProductController@editproduct')->name('editproduct');
Route::post('/editproduct/{id}','App\Http\Controllers\Admin\ProductController@updateProduct')->name('editproduct');

Route::get('/manageorder','App\Http\Controllers\Admin\OrderController@manageorder')->name('manageorder');
Route::get('/neworder','App\Http\Controllers\Admin\OrderController@neworder')->name('neworder');

Route::get('/addcategory','App\Http\Controllers\Admin\CategoryController@addcategory')->name('addcategory');
Route::post('/addcategory','App\Http\Controllers\Admin\CategoryController@postcategory')->name('addcategory');

Route::get('/managecategory','App\Http\Controllers\Admin\CategoryController@managecategory')->name('managecategory');

Route::get('/contactus','App\Http\Controllers\Admin\CmsController@contactus')->name('contactus');

Route::get('/siteidenty','App\Http\Controllers\Admin\CmsController@siteidenty')->name('siteidenty');
Route::Post('/siteidenty','App\Http\Controllers\Admin\CmsController@editsiteidenty')->name('siteidenty');


Route::get('/product','App\Http\Controllers\ProductController@product')->name('product');

Route::get('/invoice','App\Http\Controllers\Admin\InvoiceController@invoice')->name('invoice');
Route::get('/invoiceprint','App\Http\Controllers\Admin\InvoiceController@invoiceprint')->name('invoiceprint');

Route::get('/alluser','App\Http\Controllers\Admin\UserController@alluser')->name('alluser');
Route::get('/adduser','App\Http\Controllers\Admin\UserController@adduser')->name('adduser');

Route::get('/adminprofile','App\Http\Controllers\Admin\AdminController@adminprofile')->name('adminprofile');

Route::get('/appsetting','App\Http\Controllers\Admin\SettingController@appsetting')->name('appsetting');
Route::get('/smssetting','App\Http\Controllers\Admin\SettingController@smssetting')->name('smssetting');
Route::get('/emailgatway','App\Http\Controllers\Admin\SettingController@emailgatway')->name('emailgatway');
Route::get('/massage','App\Http\Controllers\Admin\MassageController@massage')->name('massage');
Route::post('/contact','App\Http\Controllers\Admin\MassageController@sendmassage')->name('contact');


Route::post('/adminprivecy','App\Http\Controllers\Admin\CmsController@editprivacy')->name('adminprivecy');

Route::get('/adminprivecy','App\Http\Controllers\Admin\CmsController@adminprivecy')->name('adminprivecy');
Route::get('/addbanner','App\Http\Controllers\Admin\CmsController@addbanner')->name('addbanner');
Route::post('/addbanner','App\Http\Controllers\Admin\CmsController@editbanner')->name('addbanner');

// Font-End
// Route::get('/home','App\Http\Controllers\Website\PageController@home')->name('home');
// Route::get('/shop','App\Http\Controllers\Website\PageController@shop')->name('shop');
// Route::get('/cart','App\Http\Controllers\Website\PageController@cart')->name('cart');
// Route::get('/chackout','App\Http\Controllers\Website\PageController@chackout')->name('chackout');
// Route::get('/contact','App\Http\Controllers\Website\PageController@contact')->name('contact');
// Route::get('/privacypolicy','App\Http\Controllers\Website\PageController@privacypolicy')->name('privacypolicy');




