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

Route::get('/', function () {
    return view('pages/index');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/samples/news/single', 'SampleController@singlenews');
Route::get('/samples/news/list', 'SampleController@listnews');
Route::get('/samples/about', 'SampleController@about');
Route::get('/samples/product/single/{id}', 'SampleController@singleproduct');
Route::get('/samples/category/{name}', 'SampleController@category');
Route::get('/samples/cart/step1', 'SampleController@cartstep1');
Route::get('/samples/cart/step2', 'SampleController@cartstep2');
Route::get('/samples/cart/step3', 'SampleController@cartstep3');
Route::get('/', 'SampleController@index');
Route::get('/samples/order', 'SampleController@order');

Route::auth();

Route::get('/home', 'HomeController@index');
