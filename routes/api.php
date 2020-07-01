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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

////Create
Route::post('/signUp', 'UserController@create');
Route::post('/consultation', 'ConsultaionController@create');
//Route::post('/createAccount', 'LiquidAccountController@register');
//Route::post('/addParty', 'UserController@store');
//Route::post('/transaction', 'TransactionController@create');
