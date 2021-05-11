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

Route::get('/', function () {
    return view('home');
});

Route::get('/eurasia', function () {
    return view('eurasia');
});

Route::get('/america', function () {
    return view('america');
});

Route::get('/africa', function () {
    return view('africa');
});

Route::get('/oceania', function () {
    return view('oceania');
});

Route::get('/antartide', function () {
    return view('antartide');
});
