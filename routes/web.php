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
Route::get('/home', 'HomeController@index')->name('home');
Route::redirect('/admin', '/home')->middleware('can:partner');

Route::resource('/admin/partner', 'PartnerController')->middleware('can:partner');
Route::get('admin/partner-attente', 'PartnerController@attente')->middleware('can:partner');
Route::get('admin/partner-change/{partner}', 'PartnerController@change')->name('change')->middleware('can:admin');


// if(Auth::user()->role_id === 3){
    
// }
// else {
    
//     dd(Auth::user());
    
// }
