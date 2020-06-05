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

Route::get('/', 'HomeController@index');

Route::post('/', 'RecordController@record');

Route::get('/subject', function () {
    return view('subject');
});

Route::get('update/{id}','RecordController@update');

Route::post('update/{id}','RecordController@realupdate');

Route::post('/subject', 'RecordController@create');

Route::get('/delete/{id}', 'RecordController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

