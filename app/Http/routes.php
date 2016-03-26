<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'MainController@index');
    Route::get('/lorem', 'LoremController@getLorem');
    Route::post('/lorem/show', 'LoremController@postShow');
    Route::get('/user', 'UserController@getUser');
    Route::post('/user/show', 'UserController@postUsers');
    Route::get('/about', 'MainController@about');

});
