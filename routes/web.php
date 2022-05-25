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

Route::group(
    [
        'prefix'        => '/',
        'namespace'     => 'App\\Http\\Controllers',
    ], function () {

    /**
     * Home Page
     */
    Route::get('/', 'HomeController@index')->name('home');

    /**
     * Sales
     */
    Route::get('/sales', 'Sale\SaleController@index')->name('sale');
    Route::get('/sales/{category}', 'Sale\SaleController@index')->name('sale.category');
    Route::get('/sales/detail/{sale}', 'Sale\SaleController@show')->name('sale.detail');

    /**
     * News
     */
    Route::get('/news', 'News\BlogController@index')->name('news');
    Route::get('/news/{category}', 'News\BlogController@index')->name('news.category');
    Route::get('/news-detail/{blog}', 'News\BlogController@show')->name('news.detail');

    /**
     * Doctors
     */
    Route::get('/doctors', 'Doctor\DoctorController@index')->name('doctor');
    Route::get('/doctors/{clinic}', 'Doctor\DoctorController@index')->name('doctor.clinic');
    Route::get('/doctor/{doctor}', 'Doctor\DoctorController@show')->name('doctor.show');

    /**
     * Contacts
     */
    Route::get('/contacts', 'Contact\ContactController@index')->name('contact');
    Route::get('/contacts/{clinic}', 'Contact\ContactController@show')->name('contact.clinic');

    /**
     * Reviews
     */
    Route::get('/reviews', 'Review\ReviewController@index')->name('review');

    /**
     * Directions
     */
    Route::get('/directions', 'Direction\DirectionController@index')->name('direction');
    Route::get('/directions/{category}', 'Direction\DirectionController@index')->name('direction.category');
    Route::get('/direction/{direction}', 'Direction\DirectionController@show')->name('direction.detail');

    /**
     * Gallery
     */
    Route::get('/gallery', 'Gallery\GalleryController@index')->name('gallery');
    Route::get('/gallery/{category}/{direction?}', 'Gallery\GalleryController@show')->name('gallery.show');

    /**
     * Search
     */
    Route::get('/search', 'Search\SearchController@index')->name('search');
    Route::get('/search/{q?}', 'Search\SearchController@index')->name('search.index');

    /**
     * Text Pages
     */
    Route::get('/text', 'Text\TextController@index')->name('text');

    /**
     * Forms
     */
    Route::group(
        [
            'prefix'        => 'form',
            'middleware'    => 'ajax',
        ],
        function() {

            Route::post('/appointment', 'Form\AppointmentController@store')->name('form.appointment');
            Route::post('/review', 'Form\ReviewController@store')->name('form.review');
            Route::post('/callback', 'Form\CallbackController@store')->name('form.callback');

        }
    );

});
