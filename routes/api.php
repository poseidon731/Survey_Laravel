<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'Api\AuthenticationController@login');
Route::post('/logo_request', 'Api\PollController@logo');

Route::middleware('auth:api')->group(function() {
    Route::post('/polls', 'Api\PollController@polls');
    Route::post('/resend', 'Api\PollController@resend');
});