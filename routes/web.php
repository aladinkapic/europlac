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
    Route::post('/prijavi-me',       'HomeController@signMeIn')->name('sign-me-in');
    Route::get('/logout',            'HomeController@logout')->name('logout');

//    Route::get('kontaktirajte-nas',  'HomeController@contactUs')->name('contact-us');
});

Route::prefix('/nekretnine/')->group(function (){
    Route::get('/',                          'EstateController@index')->name('all-estates');
    Route::get('pregled-nekretnine/{id}',    'EstateController@preview')->name('estate-preview');
});


Route::prefix('/kontaktirajte-nas/')->group(function (){
    Route::get('/',                  'ContactController@index')->name('contact-us');
});

Route::prefix('/o-nama/')->group(function (){
    Route::get('/',                  'AboutUsController@index')->name('about-us');
});

Route::prefix('/novosti/')->group(function (){
    Route::get('/',                  'NewsController@index')->name('news');
    route::get('pregled/{id}',       'NewsController@preview')->name('news.preview');
});


Route::group(['namespace' => 'Administracija', 'prefix' => '/administracija/', 'middleware' => 'authenticate'], function(){
    Route::get('/',                               'AdministracijaController@index')->name('admin');

    // Keywords - CRUD
    Route::get('pregled-sifarnika',               'AdministracijaController@allKeywords')->name('admin.all-keywords');
    Route::get('pregled-sifarnika/{key}',         'AdministracijaController@singleKeyword')->name('single-keyword');
    Route::get('unos-sifarnika/{key}',            'AdministracijaController@newKeyword')->name('new-keyword');
    Route::post('spremite-sifarnik',              'AdministracijaController@saveKeyword')->name('save-new-keyword');

    // Photo upload
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
    Route::post('/photo/photo-upload-icon',        'Photos@saveEstateImage')->name('photos.estates.save-image');
    Route::get('delete-estate/{id}',               'AdministracijaController@deleteEstate')->name('admin.delete-estate');

    // Nearby
    Route::get('u-blizini/{id}',                   'NearbyController@previewAll')->name('admin.preview-nearby');
    Route::get('unos-u-blizini/{id}',              'NearbyController@insertNew')->name('admin.insert-nearby');
    Route::post('spremi-u-blizini',                'NearbyController@save')->name('admin.save-nearby');
    Route::get('pregled-u-blizini/{id}',           'NearbyController@preview')->name('admin.preview-single-nearby');
    Route::post('azuriraj-u-blizini',              'NearbyController@update')->name('admin.update-nearby');
    Route::get('delete-nearby/{id}/{goto}',        'NearbyController@deleteNearby')->name('admin.delete-nearby');


    // Users
    Route::get('moj-profil',                      'UsersController@myProfile')->name('admin.users.my-profile');
    Route::post('azuriraj-usera',                 'UsersController@update')->name('admin.users.update');
    Route::post('/photo/photo-upload',            'Photos@saveUserIcon')->name('photos.users.save-user-icon');


    // HOMEPAGE - SECTION
    // Slider CRUD
    Route::get('slider-preview',                  'HomePageController@sliderPreview')->name('admin.homepage.slider-preview');
    Route::get('slider-add',                      'HomePageController@sliderAdd')->name('admin.homepage.slider-new-one');
    Route::post('/upload-slider-image',           'Photos@saveSliderImage')->name('admin.homepage.slider-new-image');
    Route::post('/save-slider',                   'HomePageController@saveSlider')->name('admin.homepage.slider-save');
    Route::get('slider-edit/{id}',                'HomePageController@sliderEdit')->name('admin.homepage.slider-edit');
    Route::post('/update-slider',                 'HomePageController@updateSlider')->name('admin.homepage.slider-update');

    // All estates that are visible on homepage
    Route::get('homepage-estates',                'HomePageController@allEstates')->name('admin.homepage.all-estates');

    // Blog posts
    Route::get('blog',                            'BlogController@index')->name('admin.blog.index');
    Route::get('blog-novi-post',                  'BlogController@newPost')->name('admin.blog.new-post');
    Route::post('photo/blog-photo-upload',        'Photos@photoBlogUpload')->name('photos.blog.new-post-photo');
    Route::post('save-blog-post',                 'BlogController@saveNewPost')->name('admin.blog.save-new-post');
    Route::get('blog-pregled-posta/{id}',         'BlogController@previewPost')->name('admin.blog.preview-post');
    Route::post('update-blog-post',               'BlogController@updateNewPost')->name('admin.blog.update-new-post');

    Route::get('blog-details/{id}',               'BlogController@blogDetails')->name('admin.blog.blog-details');

    // Tekst
    Route::get('insert-text/{id}',                'BlogController@newText')->name('admin.blog.blog-details-text');
    Route::get('edit-text/{id}',                  'BlogController@editText')->name('admin.blog.blog-details-text-edit');
    Route::post('insert-blog-text',               'BlogController@insertBlogText')->name('admin.blog.insert-blog-text');
    Route::post('update-blog-text',               'BlogController@updateBlogText')->name('admin.blog.update-blog-text');
    Route::get('delete-blog-text/{id}',           'BlogController@deleteBlogText')->name('admin.blog.delete-blog-text');


    // Image
    Route::get('insert-image/{id}',               'BlogController@newImage')->name('admin.blog.blog-details-image');
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
