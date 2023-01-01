<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;


Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/', 'SiteController@index');
    Route::get('/shop', 'SiteController@shop');
    Route::get('/about', 'SiteController@about');
    Route::get('/product_details', 'SiteController@product_details');
    Route::get('/blog', 'SiteController@blog');
    Route::get('/blog_details', 'SiteController@blog_details');
    Route::get('/login', 'SiteController@login');
    Route::get('/cart', 'SiteController@cart');
    Route::get('/elements','SiteController@elements');
    Route::get('/confirmation','SiteController@confirmation');
    Route::get('/checkout','SiteController@checkout');
    Route::get('/contact','SiteController@contact');

});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
