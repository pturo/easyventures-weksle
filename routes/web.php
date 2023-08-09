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
    Route::get('/jak-zlozyc-wniosek', 'PagesController@jakZlozycWniosek')->name('pages.jak-zlozyc-wniosek');
    Route::get('/jak-splacic-naleznosc', 'PagesController@jakSplacicNaleznosc')->name('pages.jak-splacic-naleznosc');
    Route::get('/warunki-finansowania', 'PagesController@warunkiFinansowania')->name('pages.warunki-finansowania');
    Route::get('/wspolpraca', 'PagesController@wspolpraca')->name('pages.wspolpraca');
    Route::get('/polityka-prywatnosci', 'PagesController@politykaPrywatnosci')->name('pages.polityka-prywatnosci');
});

// Admin panel
Route::group(['prefix'=>'admin'], function() {
    Route::get('/login', 'LoginController@index')->name('login.index');
    Route::post('/login', 'LoginController@store')->name('login.store');
    Route::post('/logout', 'LoginController@logout')->name('login.logout');
    Route::get('/dashboard', 'AdminController@index')->middleware('auth', 'verified')->name('dashboard.index');
    // Główna: O Nas
    Route::resource('o-nas', 'ONasController')->middleware('auth', 'verified');
    // Główna: Nasze atuty
    Route::resource('nasze-atuty', 'AtutyController')->middleware('auth', 'verified');
    // Główna: Współpraca
    Route::resource('wspolpraca', 'WspolpracaController')->middleware('auth', 'verified');
    // Główna: Kontakt
    Route::resource('kontakt', 'KontaktController')->middleware('auth', 'verified');
    // Lista ikon
    Route::get('lista-ikon', 'ListaIkonController@index')->middleware('auth', 'verified')->name('lista-icon.index');
});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
