<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', 'RegisterController@register');
Route::post('/login', 'LoginController@authenticate');
Route::get('/shops', 'ShopsController@index');
Route::post('/shops/create', 'ShopsController@store');
Route::get('/managers', 'ManagersController@index');
Route::get('/my-shops/{id}', 'ShopsController@getMyShops');
Route::get('/shops/search/{term}', 'ShopsController@search');
Route::get('/shops/single/{id}', 'ShopsController@find');
Route::post('/shops/articles/create', 'ArticlesController@store');
Route::get('/shops/articles/{id}', 'ArticlesController@getArticlesById');
Route::delete('/shops/articles/delete/{id}', 'ArticlesController@deleteById');
