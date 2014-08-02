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

Route::get('/', 'ContestantController@listContestant');

Route::get('/test', 'TestController@testFunction');

Route::get('/contestant/index', 'ContestantController@listContestant');

Route::get('/contestant', 'ContestantController@listContestant');

Route::get('/contestant/create', 'ContestantController@createContestant');

Route::post('/contestant/create', 'ContestantController@doCreateContestant');

Route::get('/contestant/remove/{id}', 'ContestantController@deleteContestant');