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
    Route::get('/prijavite-se',      'HomeController@signIn')->name('sign-in');
});

Route::prefix('/nekretnine/')->group(function (){
    Route::get('/',                          'EstateController@index')->name('all-estates');
    Route::get('pregled-nekretnine',         'EstateController@preview')->name('estate-preview');
});


Route::prefix('/kontaktirajte-nas/')->group(function (){
    Route::get('/',                  'ContactController@index')->name('contact-us');
});


Route::group(['namespace' => 'Administracija', 'prefix' => '/administracija/'], function(){
    Route::get('/',                               'AdministracijaController@index')->name('admin');


    // Keywords - CRUD
    Route::get('pregled-sifarnika',               'AdministracijaController@allKeywords')->name('admin.all-keywords');
    Route::get('pregled-sifarnika/{key}',         'AdministracijaController@singleKeyword')->name('single-keyword');
    Route::get('unos-sifarnika/{key}',            'AdministracijaController@newKeyword')->name('new-keyword');
    Route::post('spremite-sifarnik',              'AdministracijaController@saveKeyword')->name('save-new-keyword');

    // Estates
    Route::get('pregled-nekretnina',              'AdministracijaController@allEstates')->name('admin.all-estates');
    Route::get('dodajte-nekretninu',              'AdministracijaController@addEstate')->name('admin.add-estate');
    Route::post('spremite-nekretninu',            'AdministracijaController@saveEstate')->name('admin.save-estate');

});
