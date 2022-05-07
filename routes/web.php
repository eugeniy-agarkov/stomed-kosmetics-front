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

    /**
     * News
     */
    Route::get('/news', 'News\BlogController@index')->name('news');

    /**
     * Doctors
     */
    Route::get('/doctors', 'Doctor\DoctorController@index')->name('doctor');

    /**
     * Contacts
     */
    Route::get('/contacts', 'Contact\ContactController@index')->name('contact');

    /**
     * Reviews
     */
    Route::get('/reviews', 'Review\ReviewController@index')->name('review');

    /**
     * Directions
     */
    Route::get('/directions', 'Direction\DirectionController@index')->name('direction');
    Route::get('/directions/{direction}', 'Direction\DirectionCategoryController@index')->name('direction.category');


});
