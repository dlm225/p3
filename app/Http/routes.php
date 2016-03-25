<?php

Route::get('/', 'IndexController@index');
Route::get('/lorem', 'LoremController@getLorem');

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
