<?php

Route::group(['middleware' => 'usersession', 'prefix' => 'admin/dashboard', 'namespace' => 'Modules\Dashboard\Http\Controllers'], function()
{
    Route::get('/', 'DashboardController@index');
    Route::get('/profile', 'DashboardController@profile');
    Route::post('/updateinfo', 'DashboardController@UpdateInfo');
});
