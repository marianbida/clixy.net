<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Route::get('test', 'TestController@index');

Route::group(['middleware' => array('auth')], function() {
    
    Route::get('/', 'HomeController@index');
    
    Route::get('navigation', 'NavigationController@index');
    Route::post('navigation/list', 'NavigationController@postList');
    Route::post('navigation/get', 'NavigationController@postGet');
    Route::post('navigation/create', 'NavigationController@postCreate');
    Route::post('navigation/remove', 'NavigationController@postRemove');
    Route::post('navigation/save', 'NavigationController@postSave');
    
    Route::get('color', 'ColorController@index');
    Route::post('color/list', 'ColorController@postList');
    Route::post('color/get', 'ColorController@postGet');
    Route::post('color/create', 'ColorController@postCreate');
    Route::post('color/remove', 'ColorController@postRemove');
    Route::post('color/save', 'ColorController@postSave');
    
    // slide
    Route::get('slider', 'SliderController@index');
    Route::post('slide/list', 'SliderController@postList');
    Route::post('slide/get', 'SliderController@postGet');
    Route::post('slide/create', 'SliderController@postCreate');
    Route::post('slide/remove', 'SliderController@postRemove');
    Route::post('slide/save', 'SliderController@postSave');
    
    // conf
    Route::get('conf',          'ConfController@index');
    Route::post('conf/list',    'ConfController@postList');
    Route::post('conf/get',     'ConfController@postGet');
    Route::post('conf/create',  'ConfController@postCreate');
    Route::post('conf/remove',  'ConfController@postRemove');
    Route::post('conf/save',    'ConfController@postSave');
    
    // category
    Route::get('category',          'CategoryController@index');
    Route::post('category/list',    'CategoryController@postList');
    Route::post('category/get',     'CategoryController@postGet');
    Route::post('category/create',  'CategoryController@postCreate');
    Route::post('category/remove',  'CategoryController@postRemove');
    Route::post('category/save',    'CategoryController@postSave');
    
    // item
    Route::get('item',          'ItemController@index');
    Route::post('item/list',    'ItemController@postList');
    Route::post('item/get',     'ItemController@postGet');
    Route::post('item/create',  'ItemController@postCreate');
    Route::post('item/remove',  'ItemController@postRemove');
    Route::post('item/save',    'ItemController@postSave');
    
    Route::post('item/date/list',  'ItemController@postDateList');
    Route::post('item/date/remove',  'ItemController@postDateRemove');
    Route::post('item/date/create',  'ItemController@postDateCreate');
    
    
    // user
    Route::get('user',          'UserController@index');
    Route::post('user/list',    'UserController@postList');
    Route::post('user/get',     'UserController@postGet');
    Route::post('user/create',  'UserController@postCreate');
    Route::post('user/remove',  'UserController@postRemove');
    Route::post('user/save',    'UserController@postSave');
    
    // page
    Route::get('page',          'PageController@index');
    Route::post('page/list',    'PageController@postList');
    Route::post('page/get',     'PageController@postGet');
    Route::post('page/create',  'PageController@postCreate');
    Route::post('page/remove',  'PageController@postRemove');
    Route::post('page/save',    'PageController@postSave');
    
    // newsletter
    Route::get('newsletter',          'NewsletterController@index');
    Route::post('newsletter/list',    'NewsletterController@postList');
    Route::post('newsletter/get',     'NewsletterController@postGet');
    Route::post('newsletter/create',  'NewsletterController@postCreate');
    Route::post('newsletter/remove',  'NewsletterController@postRemove');
    Route::post('newsletter/save',    'NewsletterController@postSave');
    
    // newslettersubscribers
    Route::get('newslettersubscribers',          'NewsletterSubscribersController@index');
    Route::post('NewsletterSubscribers/list',    'NewsletterSubscribersController@postList');
    Route::post('NewsletterSubscribers/get',     'NewsletterSubscribersController@postGet');
    Route::post('NewsletterSubscribers/create',  'NewsletterSubscribersController@postCreate');
    Route::post('NewsletterSubscribers/remove',  'NewsletterSubscribersController@postRemove');
    Route::post('NewsletterSubscribers/save',    'NewsletterSubscribersController@postSave');
    
    // media
    Route::post('media/getMediaPagination', 'MediaController@postGetMediaPagination');
    Route::post('media/getMediaDetailList', 'MediaController@postGetMediaDetailList');
    Route::post('media/upload', 'MediaController@postUpload');
    Route::post('media/remove', 'MediaController@postRemove');
    
});
