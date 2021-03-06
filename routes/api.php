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

Route::post('/login', 'Api\Auth\LoginController@login');

Route::middleware('auth:api')->group(function () {
    Route::get('/user', 'Api\Auth\LoginController@user');

    Route::apiResource('/health-facility-data', 'Api\HealthFacilityDataController')->middleware(['throttle:100,1']);
});
