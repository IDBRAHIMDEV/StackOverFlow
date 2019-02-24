<?php

Route::apiResource('/category', 'CategoryController');
Route::apiResource('/question', 'QuestionController');
Route::apiResource('/question/{question}/reply', 'ReplyController');


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('signup', 'AuthController@signUp');

});