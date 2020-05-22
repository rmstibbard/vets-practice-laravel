<?php

use Illuminate\Support\Facades\Route;


// HOMEPAGE -> LOGIN
Route::get('/', 'HomeController@index')->name('home');
Auth::routes();


// OWNERS GROUP - LOGIN REQUIRED
// Route::group(["prefix" => "owners", "middleware" => "auth" ], function () {

    // Owners controller - Create
    Route::get('/create', "Owners@create");
    Route::post('/create', "Owners@createOwner");

    // Owners controller - View
    Route::get('/', "Owners@index");
    Route::get('/{owner}', "Owners@show");

    // Owners controller - Edit
    Route::get('/edit/{owner}', "Owners@edit");
    Route::post('/edit/{owner}', "Owners@editOwner");

// });


// ANIMALS GROUP - LOGIN REQUIRED
// Route::group(["prefix" => "animals", "middleware" => "auth" ], function () {

    // Animals controller - Create
    Route::get('/create', "Animals@create");
    Route::post('/create', "Animals@createAnimal");

    // Animals controller - View
    Route::get('/', "Animals@index");
    Route::get('/{animal}', "Animals@show");

    // Animals controller - Edit
    Route::get('/edit/{animal}', "Animals@edit");
    Route::post('/edit/{animal}', "Animals@editAnimal");

    // Animals controller - Delete
    Route::get('/delete/{animal}', "Animals@deleteAnimal");

// });


// Search page - LOGIN REQUIRED, No prefix
// Route::group(["middleware" => "auth" ], function () {

    Route::get('/search', 'Pages@search');
// });


// Static pages - NO LOGIN REQUIRED
Route::get('/about', 'Pages@about');
Route::get('/services', 'Pages@services');
Route::get('/contact', 'Pages@contact');
