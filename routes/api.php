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

Route::group(["prefix" => "animals", "middleware" => "auth:api" ], function () {

    // Animals list - View
    Route::get('', 'API\animals@index');

    // Single animal - View
    Route::get('{animal}', 'API\animals@show');

    // Animal - Create
    Route::post('', 'API\animals@store');

    // Animal - Edit
    Route::put('{animal}', 'API\animals@update');

    // Animal - Delete
    Route::delete('{animal}', 'API\animals@destroy');

});

Route::group(["prefix" => "owners", "middleware" => "auth:api" ], function () {

    // Owners list - View
    Route::get('', 'API\owners@index');

    // Single owner - View
    Route::get('{owner}', 'API\owners@show');

    // Owner - Create
    Route::post('', 'API\owners@store');

    // Owner - Edit
    Route::put('{owner}', 'API\owners@update');

    // Owner - Delete
    Route::delete('{owner}', 'API\owners@destroy');

    // Owner's animals - View
    Route::get('{owner}/animals', 'API\owners\animals@show');

    // Owner's animals - Create
    Route::post('{owner}/animals', 'API\owners\animals@store');

});