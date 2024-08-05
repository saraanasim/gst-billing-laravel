<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Basic Route
Route::get('/', function () {
    return 'Basic Route';
});

// Named Route
Route::get('/about', function () {
    return 'About named Route';
});

// Route with parameter
Route::get('/info/{name}', function () {
    return "Info Parameter Route";
});

// Route with parameter
Route::get('/optional-info/{name?}', function () {
    return "Info Optional Parameter Route";
});

