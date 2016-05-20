<?php

Route::get('/', ['uses' => 'SubscriptionsController@index', 'as' =>'home']);
Route::post('create', ['uses' => 'SubscriptionsController@handleCreate', 'as' =>'create']);
Route::get('bedankt', ['uses' => 'SubscriptionsController@show', 'as' =>'show']);

Route::get('login', ['uses' => 'Admin\AuthController@login', 'as' =>'login']);
Route::post('login', ['uses' => 'Admin\AuthController@handleLogin', 'as' =>'login.post']);

Route::group(['prefix'=>'admin'], function(){
    Route::get('/', ['uses' => 'Admin\AuthController@index', 'as' =>'admin.index']);

    Route::resource('schools', 'Admin\SchoolsController');

    // Route::resource('schools/{town_id}/{region}/store',['as' => 'schools.store', 'uses' => 'SchoolsController@store']);

    Route::resource('subscriptions', 'Admin\SubscriptionsController');
    Route::resource('entrydates', 'Admin\EntryDatesController');

    Route::get('entrydates\calculate', ['uses' =>
        'Admin\EntryDatesController@calculate', 'as'=>'admin.entrydates.calculate']);
    Route::post('entrydates\calculate', ['uses' =>
        'Admin\EntryDatesController@handleCalculate', 'as'=>'admin.entrydates.calculate.post']);

    Route::resource('regions', 'Admin\RegionsController');
    Route::resource('zipcodes', 'Admin\ZipCodesController');
    Route::resource('users', 'Admin\UsersController');

    Route::get('logout', ['uses' => 'Admin\AuthController@logout', 'as' =>'logout']);
});


