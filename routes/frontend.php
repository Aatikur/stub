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

// ------- Index --------

use Illuminate\Support\Facades\Route;
Route::group(['namespace' => 'Web'],function(){
    Route::get('/', function () {
        return view('web.index');
    })->name('web.index');

    // ------- About --------
    Route::get('/About', function () {
        return view('web.about.about');
    })->name('web.about.about');

    // ------- Contact --------
    Route::get('/Contact', function () {
        return view('web.contact.contact');
    })->name('web.contact.contact');

    // ------- Product --------
    Route::get('/Product', function () {
        return view('web.product.product');
    })->name('web.product.product');

    // ------- LITHO AND DIGITAL PRINTING --------
    Route::get('/Litho-And-Digital-Printing', function () {
        return view('web.product.product-portfolio1');
    })->name('web.product.product-portfolio1');

    // ------- Corporate Gifts --------
    Route::get('/Corporate-Gifts', function () {
        return view('web.product.product-portfolio2');
    })->name('web.product.product-portfolio2');

    // ------- Flexo Printing --------
    Route::get('/Flexo-Printing', function () {
        return view('web.product.product-portfolio3');
    })->name('web.product.product-portfolio3');

    // ------- Promotional&Pos --------
    Route::get('/Promotional&Pos', function () {
        return view('web.product.product-portfolio4');
    })->name('web.product.product-portfolio4');

    // ------- Promotional&Pos --------
    // Route::get('/res', function () {
    //     return view('web.contact.response');
    // })->name('web.contact.response');

// ------- Gallery --------

    Route::get('/Gallery', 'WebController@gallery')->name('web.gallery');
    Route::post('/add/contacts','WebController@addContacts')->name('web.add_contacts');
    Route::get('/res/{status}','WebController@response')->name('web.response');
});
