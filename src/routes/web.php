<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/' ,                    [  'uses'        => 'App\Http\Controllers\SiteController@index']);

Route::get('/elastica-client' ,                    [  'uses'        => 'App\Http\Controllers\ClientController@index']);

Route::get('/mba-player/create' ,                    [  'uses'        => 'App\Http\Controllers\MBAPLayerController@create']);
Route::get('/mba-player/mapping' ,                    [  'uses'        => 'App\Http\Controllers\MBAPLayerController@create_mapping']);
Route::get('/mba-player/show-mapping' ,                    [  'uses'        => 'App\Http\Controllers\MBAPLayerController@show_mapping']);
Route::get('/mba-player/list/{id}' ,         [  'uses'        => 'App\Http\Controllers\MBAPLayerController@list']);
Route::get('/mba-player/update/{id}' ,         [  'uses'        => 'App\Http\Controllers\MBAPLayerController@update']);
Route::get('/mba-player/fuzzy-search-first-name/{first_name}' ,         [  'uses'        => 'App\Http\Controllers\MBAPLayerController@fuzzy_search_first_name']);
Route::get('/mba-player/search-first-name/{first_name}' ,         [  'uses'        => 'App\Http\Controllers\MBAPLayerController@search_first_name']);
Route::get('/mba-player/search-aggregate' ,         [  'uses'        => 'App\Http\Controllers\MBAPLayerController@search_aggregate']);
Route::get('/mba-player/search-paginate' ,         [  'uses'        => 'App\Http\Controllers\MBAPLayerController@search_paginate']);
Route::get('/mba-player/delete/{id}' ,         [  'uses'        => 'App\Http\Controllers\MBAPLayerController@delete']);
Route::get('/mba-player/delete-index' ,         [  'uses'        => 'App\Http\Controllers\MBAPLayerController@delete_index']);
