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

    // Photo upload
    Route::post('/photo/photo-upload',            'Photos@saveEstateIcon')->name('photos.save-estate-icon');
    Route::get('/photo/galerija/{id}',            'Photos@photoGallery')->name('photos.photo-gallery');
    Route::post('/photo/upload-to-gallery',       'Photos@savePhotosToGallery')->name('photos.save-to-gallery');
    Route::get('/remove_file/{id}',               'Photos@removeFile')->name('photos.remove-file');

    Route::get('/files/all-files/{id}',            'Photos@allFiles')->name('photos.all-files');

    // Estates
    Route::get('pregled-nekretnina',               'AdministracijaController@allEstates')->name('admin.all-estates');
    Route::get('dodajte-nekretninu',               'AdministracijaController@addEstate')->name('admin.add-estate');
    Route::post('spremite-nekretninu',             'AdministracijaController@saveEstate')->name('admin.save-estate');
    Route::get('pregled-nekretnine/{id}/{what}',   'AdministracijaController@previewEstate')->name('admin.preview-estate');
    Route::post('azurirajte-nekretninu',           'AdministracijaController@updateEstate')->name('admin.update-estate');
});



/*
 |----------------------------------------------------------------------------------------------------------------------
 |      UPLOAD FAJLOVA SA PROGRESS BAROM
 |----------------------------------------------------------------------------------------------------------------------
 |
 |      Omogućen upload fajlova progres barom, tako što vraća sve date fajlove u formi inputa odnosno niza inputa
 |
 */

Route::group([ 'namespace' => 'Upload', 'prefix' => '/upload/',], function(){
    Route::post('upload-fajlova',                       'UploadController@uploadFajlova')->name('upload-fajlova');
});
