<?php

use Illuminate\Support\Facades\Route;

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

Route::post('/v1/turns', 'TurnController@requestTurn');
Route::put('/v1/modules/available', 'ModuleController@releaseModules');
Route::put('/v1/modules/unavailable', 'ModuleController@putBusyModules');
