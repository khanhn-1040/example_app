<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\HomeController;

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

Route::group(['prefix' => 'v1'], function () {
    Route::resource('/home', HomeController::class);

    Route::group(['prefix' => 'auth'], function () {

    });

    Route::middleware('auth:api')->group(function () {
    });
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
