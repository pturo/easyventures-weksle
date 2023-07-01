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

// Index page
Route::group(['prefix'=>'/'], function() {
    Route::get('', 'IndexController@index')->name('index.index');
    Route::get('/zloz-zapytanie', 'IndexController@create')->name('zloz-zapytanie.create');
    Route::post('/zloz-zapytanie', 'IndexController@store')->name('zloz-zapytanie.store');
});

// Admin panel
Route::group(['prefix'=>'admin'], function() {
    Route::get('/login', 'LoginController@index')->name('login.index');
    Route::post('/login', 'LoginController@store')->name('login.store');
    Route::get('/dashboard', 'AdminController@index')->name('dashboard.index');
    Route::get('/o-nas', 'ONasController@index')->name('o-nas.index');
    Route::get('/o-nas/dodaj', 'ONasController@create')->name('o-nas.create');
    Route::post('/o-nas/dodaj', 'ONasController@store')->name('o-nas.store');
});

