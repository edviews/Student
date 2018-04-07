<?php

Route::group(['middleware' => 'web', 'prefix' => 'student', 'namespace' => 'Modules\Student\Http\Controllers'], function()
{
    Route::get('/', 'StudentController@index');
});
