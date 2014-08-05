<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showApp');

Route::get('/test', 'TestController@testFunction');

Route::get('/contestant/index', 'ContestantController@listContestant');

Route::get('/contestant', 'ContestantController@listContestant');

Route::get('/contestant/create', 'ContestantController@createContestant');

Route::post('/contestant/create', 'ContestantController@doCreateContestant');

Route::get('/contestant/remove/{id}', 'ContestantController@deleteContestant');

Route::get('/update', 'ProgressController@update');

Route::get('/api/score/mean', 'ApiController@getMeanScore');

Route::get('/api/submission/mean', 'ApiController@getMeanSubmission');

Route::get('/api/score/contestant/{id}', 'ApiController@getContestantScore');

Route::get('/api/submission/contestant/{id}', 'ApiController@getContestantSubmission');

Route::get('/api/contestant/list', 'ApiController@getContestantList');

Route::get('/api/contestant/data/{id}', 'ApiController@getContestantData');