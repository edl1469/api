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
//Route::post('/ldap', 'AuthController@ldap');
Route::middleware('auth:api')->post('/ldap', 'AuthController@ldap');
Route::get('/ldap', 'AuthController@invalid');

Route::group(['middleware' => ['api']], function () {
    Route::post('auth/register', 'Auth\ApiRegisterController@create')->name('apiregister');
});

