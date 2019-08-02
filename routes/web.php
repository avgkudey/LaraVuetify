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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('invoice', function(){
    return view('invoice');
});


Route::get('/admin/home',array('as'=>'admin.home', function () {
    return "admin";
}));



Route::get('{path}','HomeController@index')->where( 'path', '([0-9A-Za-z\-]+)?' );
