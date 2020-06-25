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
Route::get('/auth', 'AuthController@auth');

Route::middleware('/auth')->group(function(){
Route::get('/logout', 'AuthController@logout');
});

Route::get('/search', 'ApiController@search');

Route::get('/index', 'ApiController@indexAction');

Route::get('/index1', 'ApiController@index1Action');

Route::get('/index2', 'ApiController@index2Action');

Route::get('/index3', 'ApiController@index3Action');

Route::get('/index4', 'ApiController@index4Action');

Route::get('/formavhoda', 'ApiController@formavhodaAction');

Route::get('/reg', 'ApiController@regAction');

Route::get('/registration', 'AuthController@reg');

Route::get('/getProducts', 'ApiController@getProducts');