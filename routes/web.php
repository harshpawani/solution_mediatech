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

Route::get('/', function () {
    return view('desktop-14');
});

Route::view('/menu', 'menu'); //belum
Route::view('/desktop-14', 'desktop-14')->name('desktop-14');
Route::view('/see-more', 'see-more')->name('see-more');
Route::view('/philosophy', 'philosophy')->name('philosophy');
Route::view('/case-studies', 'case-studies')->name('case-studies');
Route::view('/desktop-50', 'desktop-50')->name('desktop-50');
Route::view('/capabilities', 'capabilities')->name('capabilities');
Route::view('/careers', 'careers')->name('careers');
Route::view('/blogs', 'blogs/blogs')->name('blogs');
Route::view('/contact-us', 'contact-us')->name('contact-us');
Route::view('/privacy-policy', 'privacy-policy')->name('privacy-policy');
Route::view('/terms-and-conditions', 'terms-and-conditions')->name('terms-conditions');
Route::view('/opportunities', 'opportunities')->name('opportunities');
Route::view('/blog-details', 'blog-details')->name('blog-details');
Route::view('/terms-and-conditions-2', 'terms-and-conditions-2')->name('terms-conditions-2');
Route::view('/test', 'try-conic-gradient');
Route::view('/test-2', 'try-conic-gradient-2');
