<?php

use Illuminate\Support\Facades\Route;

// HOMEPAGE -> LOGIN
Route::get('/', 'HomeController@index')->name('home');
Auth::routes();


// USERS GROUP - LOGIN REQUIRED
Route::group(["prefix" => "userprofile", "middleware" => "auth" ], function () {
    Route::post('/', "UserprofileController@index");
    Route::post('/edit', "UserprofileController@edit");
    Route::post('/editUserprofile', "UserprofileController@editUserprofile");
});


// OWNERS GROUP - LOGIN REQUIRED
Route::group(["prefix" => "owners", "middleware" => "auth" ], function () {

    // Owner - Create
    Route::get('/create', "Owners@create");
    Route::post('/create', "Owners@createOwner");

    // Owners list - View
    Route::get('/', "Owners@index");

    // Single owner - View
    Route::get('/{owner}', "Owners@show");

    // Owner - Edit
    Route::get('/edit/{owner}', "Owners@edit");
    Route::post('/edit/{owner}', "Owners@editOwner");

});


// ANIMALS GROUP - LOGIN REQUIRED
Route::group(["prefix" => "animals", "middleware" => "auth" ], function () {

    // Animal - Create
    Route::get('/create', "Animals@create");
    Route::post('/create', "Animals@createAnimal");

    // Animals list - View
    Route::get('/', "Animals@index");

    // Single animal - View
    Route::get('/{animal}', "Animals@show");

    // Animal - Edit
    Route::get('/edit/{animal}', "Animals@edit");
    Route::post('/edit/{animal}', "Animals@editAnimal");

    // Animal - Delete
    Route::get('/delete/{animal}', "Animals@deleteAnimal");

});


// Search page - LOGIN REQUIRED, No prefix
Route::group(["middleware" => "auth" ], function () {
    Route::get('/search', 'Pages@search');
});


// Static pages - NO LOGIN REQUIRED
Route::get('/about', 'Pages@about');
Route::get('/services', 'Pages@services');
Route::get('/contact', 'Pages@contact');