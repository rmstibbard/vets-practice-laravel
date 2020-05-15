<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('owners/create', "Owners@create");

Route::post('owners/create', "Owners@createOwner");

Route::get('animals/create', "Animals@create");

Route::post('animals/create', "Animals@createAnimal");

Route::get('/', "Owners@index");

Route::get('owners/edit/{owner}', "Owners@edit");

Route::post('owners/edit/{owner}', "Owners@editOwner");

Route::get('owners/', "Owners@index");

Route::get('owners/{owner}', "Owners@show");

Route::get('/about', function () {
    return view('about');
});

Route::get('animals/', "Animals@index");

Route::get('animals/{animal}', "Animals@show");

Route::get('animals/edit/{animal}', "Animals@edit");

Route::post('animals/edit/{animal}', "Animals@editAnimal");