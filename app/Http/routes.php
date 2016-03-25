<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'MainController@index');
    Route::get('/lorem', 'LoremController@getLorem');
    Route::post('/lorem/show', 'LoremController@postShow');


});
