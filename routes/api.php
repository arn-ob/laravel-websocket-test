<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/message', 'App\Http\Controllers\MessageController@broadcast');
Route::get('/getmessage/{chatroom}', 'App\Http\Controllers\MessageController@getmessage');

Route::get('/allroom', 'App\Http\Controllers\MessageController@getAllChatRoom');

