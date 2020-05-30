<?php

use Illuminate\Support\Facades\Route;

// HOMEPAGE -> LOGIN
Route::get('/', 'HomeController@index')->name('home');
Auth::routes();


// USERS GROUP - LOGIN REQUIRED
Route::group(["prefix" => "users", "middleware" => "auth"], function () {
    Route::get('/edit', "Users@edit");
    Route::post('/edit', "Users@editUser");

    Route::get('/create', "Users@create");
    Route::post('/create', "Users@createUser");

    // Users list - View
    Route::get('/', "Users@index");

    // Single user - View
    Route::get('/{user}', "Users@show");

    // Single user - Edit
    Route::get('/edit/{user}', "Users@edit");
    Route::post('/edit/{user}', "Users@editUser");

    // Single user - Edit
    Route::get('/delete/{user}', "Users@deleteUser");

});
// http://192.168.10.10/userprofile/?_token=S5NJRbizHg4HDTyhwLkRnPjJI4AOq31fTYXzHKcP&name=admin&email=admin%40admin.com&role=admin - WHY IS USER DATA EXPOSED IN URL AND HOW TO PREVENT THIS?


// OWNERS GROUP - LOGIN REQUIRED
Route::group(["prefix" => "owners", "middleware" => "auth"], function () {

    // Owner - Create
    Route::get('/create', "Owners@create");
    Route::post('/create', "Owners@createOwner");

    // Owners list - View
    Route::get('/', "Owners@index");

    // Single owner - View
    Route::get('/{owner}', "Owners@show");

    // Single owner - Edit
    Route::get('/edit/{owner}', "Owners@edit");
    Route::post('/edit/{owner}', "Owners@editOwner");

    // Single user - Delete
    Route::get('/delete/{user}', "Users@deleteUser");

});


// ANIMALS GROUP - LOGIN REQUIRED
Route::group(["prefix" => "animals", "middleware" => "auth"], function () {

    // Animal - Create
    Route::get('/create', "Animals@create");
    Route::post('/create', "Animals@createAnimal");

    // Animals list - View
    Route::get('/', "Animals@index");

    // Single animal - View
    Route::get('/{animal}', "Animals@show");

    // Single animal - Edit
    Route::get('/edit/{animal}', "Animals@edit");
    Route::post('/edit/{animal}', "Animals@editAnimal");

    // Single animal - Delete
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