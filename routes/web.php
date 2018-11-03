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

Auth::routes();

Route::redirect('/admin', '/home');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/partner', 'PartnerController');
Route::get('admin/partner-attente', 'PartnerController@attente');