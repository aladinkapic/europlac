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

Route::prefix('/')->group(function (){
    Route::get('/',                  'HomeController@index')->name('home');
});

Route::prefix('/nekretnine/')->group(function (){
    Route::get('/',                  'EstateController@index')->name('all-estates');
});


Route::prefix('/kontaktirajte-nas/')->group(function (){
    Route::get('/',                  'ContactController@index')->name('contact-us');
});
