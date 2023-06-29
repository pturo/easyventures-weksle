<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('glowna', 'IndexController');
//Route::resource('admin', 'AdminController');

// Index page
// Route::group(['prefix'=>'glowna'], function() {
//     Route::get('/', 'IndexController@index');
//     //Route::post('/zloz-zapytanie', 'IndexController@store');
// });

// Admin panel
Route::group(['prefix'=>'admin'], function() {
    Route::get('/login', 'LoginController@index')->name('login.index');
    Route::post('/login', 'LoginController@store')->name('login.store');
    Route::get('/dashboard', 'AdminController@index')->name('dashboard.index');
    Route::get('/o-nas', 'ONasController@index')->name('o-nas.index');
});

