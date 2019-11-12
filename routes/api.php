<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
| everything in here is prefixed with /api
*/

Route::prefix('alumnos')->group(function () {
    Route::get('info/', 'QR_auth@getStudentsData');
    Route::get('avatar/', 'QR_auth@getStudentsAvatar');
});