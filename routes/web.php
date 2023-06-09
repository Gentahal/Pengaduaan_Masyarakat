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

Route::get('/', 'UserController@index')->name('user.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('pengaduan', 'PengaduanController');

Route::group(['middleware' => ['auth', 'status:admin']], function () {
    
});