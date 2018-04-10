<?php

Route::group(['middleware' => 'api', 'prefix' => 'api/v1', 'namespace' => 'Modules\Student\Http\Controllers'], function()
{
    Route::apiResource('/students', 'StudentController');

    Route::group(['prefix' => 'students',], function()
    {
        Route::apiResource('/{student}/profile', 'ProfileController');
        Route::apiResource('/{student}/academic', 'AcademicController');
    });
});