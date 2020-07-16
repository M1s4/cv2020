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
    return view('layout');  
});

Route::get('/inicio', function () {
    return view('inicio');  
});

Route::get('/experiencia', function () {
    return view('experiencia');  
});

Route::get('/educacion', function () {
    return view('educacion');  
});

Route::get('/portafolio', function () {
    return view('portafolio');  
});