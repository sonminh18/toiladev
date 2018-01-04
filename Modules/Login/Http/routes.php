<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin/login', 'namespace' => 'Modules\Login\Http\Controllers'], function()
{
    Route::post('/signin', 'LoginController@signin');
    Route::get('/signout', 'LoginController@signout');
});
