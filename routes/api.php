<?php

use Illuminate\Http\Request;
use App\NewsItem;
use App\User;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/ping', function (Request $request) {
    activity()
        ->log('Pong was pingged');

    return response()->json([
      'status' => '200',
      'response' => 'PONG',
    ]);
});
