<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin'],function(){
    Route::get('/admin/login','LoginController@index')->name('admin.login_form');    
    Route::post('login', 'LoginController@adminLogin');
    
   

    Route::group(['middleware'=>'auth:admin','prefix'=>'admin'],function(){
        Route::get('/dashboard', 'DashboardController@dashboardView')->name('admin.deshboard'); 
        Route::post('logout', 'LoginController@logout')->name('admin.logout');
        Route::get('/change/password/form', 'DashboardController@changePasswordForm')->name('admin.change_password_form');
        Route::post('/change/password', 'DashboardController@changePassword')->name('admin.change_password');
        
        Route::group(['prefix'=>'gallery'],function(){
            Route::get('list','GalleryController@galleryList')->name('admin.gallery_list');
            Route::get('add/form','GalleryController@addImageForm')->name('admin.add_image_form');
            Route::post('add','GalleryController@addImage')->name('admin.add_image');
            Route::get('edit/form/{id}','GalleryController@imageEditForm')->name('admin.image_edit_form');
            Route::put('update/{id}','GalleryController@updateImage')->name('admin.update_image');
            Route::get('delete/{id}','GalleryController@deleteImage')->name('admin.delete_image');
        });

        Route::group(['prefix'=>'inquiry'],function(){
            Route::get('contact/list/form','InquiryController@contactList')->name('admin.contact_list');
            Route::get('ajax/list','InquiryController@contactListAjax')->name('admin.contact_list_ajax');

        });

        Route::group(['prefix'=>'product'],function(){
            Route::get('product/list/form','ProductController@productImageList')->name('admin.product_image_list_form');
            Route::get('add/form','ProductController@addImageForm')->name('admin.add_product_image_form');
            Route::post('add','ProductController@addImage')->name('admin.product_add_image');
            Route::get('ajax/list','ProductController@imageListAjax')->name('admin.image_list_ajax');
            Route::get('edit/form/{id}','ProductController@imageEditForm')->name('admin.product_image_edit_form');
            Route::put('update/{id}','ProductController@updateImage')->name('admin.update_product_image');
            Route::get('delete/{id}','ProductController@deleteImage')->name('admin.delete_product_image');
        });
 
        
    });   
});