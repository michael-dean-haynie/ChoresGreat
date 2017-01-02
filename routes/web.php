<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Dev =================================
Route::get('dev/route1', 'DevController@route1');

// ChoreManager ========================
Route::get('choremanager/task', 'ChoreManager@getTaskIndex');

Route::get('choremanager/job', 'ChoreManager@getJobIndex');
Route::get('choremanager/createjob');