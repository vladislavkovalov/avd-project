<?php

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function(){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/article', 'ArticleController', ['as'=>'admin']);
    Route::resource('/slot', 'SlotController', ['as'=>'admin']);
    Route::resource('/param', 'ParamController', ['as'=>'admin']);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

