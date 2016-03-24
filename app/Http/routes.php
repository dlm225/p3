<?php

Route::get('/', 'IndexController@index');
Route::get('/text', 'TextGenController@getText');
Route::get('/text/lorem', 'TextGenController@getLorem');
Route::get('/text/sports', 'TextGenController@getSports');
Route::get('/temp', function() {return 'Temp page successful!';});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
