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

Route::get('/animals', 'API\animals@index');
Route::get('/animals/{animal}', 'API\animals@show');
Route::post('/animals/', 'API\animals@store');
Route::put('/animals/{animal}', 'API\animals@update');
Route::delete('/animals/{animal}', 'API\animals@destroy');

Route::get('/owners', 'API\owners@index');
Route::get('/owners/{owner}', 'API\owners@show');
Route::post('/owners/', 'API\owners@store');
Route::put('/owners/{owner}', 'API\owners@update');
Route::delete('/owners/{owner}', 'API\owners@destroy');

Route::get('/owners/{owner}/animals', 'API\owners\animals@show');
Route::post('/owners/{owner}/animals', 'API\owners\animals@store');