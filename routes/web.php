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

Route::get('events', 'EventController@index');
Route::get('events/create', 'EventController@create')->name('events.create');
Route::get('events/edit/{id}', 'EventController@edit')->name('events.edit');
Route::post('events/store', 'EventController@store')->name('events.store');
Route::get('events/show/{id}','EventController@show')->name('events.show');
Route::patch('events/update/{id}', 'EventController@update')->name('events.update');
Route::delete('events/destroy/{id}', 'EventController@destroy')->name('events.destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users','Admin\UserController');

// Route::resource('competitions','CompetitionController');
Route::get('/competitions/create-step1', 'CompetitionController@create')->name('competitions.create');
Route::post('/competitions/create-step1', 'CompetitionController@competitionCreate')->name('competitions.store');
Route::get('/competitions/create-preview', 'CompetitionController@createPreview')->name('competitions.preview');
Route::post('/competitions/create-preview', 'CompetitionController@CompetitionController@competitionPreview');
Route::post('/competitions/store', 'CompetitionController@store');