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

Route::get('/','ReportController@main')->name('main');
/*Route::get('/',function (){
    return view('layouts.master');
});*/
Route::get('/about','AboutUsController@about')->name('about');

Route::resource('/slider','SliderController');
Route::post('/slider/trash/{trash}', 'SliderController@trash')->name('slider.trash');

Route::resource('/report','ReportController');
Route::get('/news','ReportController@news')->name('report.all');


Route::get('/ShowGallery','GalleryController@ShowGallery')->name('gallery');
Route::resource('/gallery','GalleryController');

Route::delete('/contact/{id}' ,'ContactController@destroy')->name('contact.delete');
Route::get('/contact' ,'ContactController@create');
Route::post('/contact' ,'ContactController@store')->name('contact.store');
Route::get('/allcontact' ,'ContactController@index')->name('contact.all');

