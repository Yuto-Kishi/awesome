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

//課題４
Route::group(['prefix'=>'XXX'],function(){
    Route::get('XXX','XXX\AAAController@bbb');
});


//課題５
Route::group(['prefix'=>'admin'],function(){
    Route::get('profile/create','Admin\ProfileController@add');
    Route::get('profile/edit','Admin\ProfileController@edit');
});


