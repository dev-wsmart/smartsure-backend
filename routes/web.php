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
//     return view('welcome');
// });

Route::resource('/banner', 'BannerController');
Route::resource('/about-us', 'AboutUsController');
Route::resource('/home/content1', 'HomeContent1Controller');
Route::resource('/home/add-content1', 'AddHomeContent1Controller');
Route::resource('/home/content2', 'HomeContent2Controller');
Route::resource('/home/add-content2', 'AddHomeContent2Controller');
Route::resource('/contact-us', 'ContactController');