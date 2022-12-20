<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

 Auth::routes(['verify' =>true]);
    Route::group([
        'prefix'=>LaravelLocalization::setLocale(),
        'middleware'=>['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']

    ],function(){

    Route::group(['namespace' =>'Site'], function () {

        route::get('/','HomeController@home')->name('home');
        
        // route to the PagesController
        route::get('property/{id}','PropertyController@propertyById')->name('property.details');
        Route::get('services', 'PagesController@services')->name('services');
        Route::get('aboutUs', 'PagesController@aboutUs')->name('aboutUs');
        Route::get('properties', 'PagesController@properties')->name('properties');
        Route::get('contact', 'PagesController@contact')->name('contact');
        Route::get('blog', 'PagesController@blog')->name('blog');

    }); 
});

