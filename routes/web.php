<?php

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
    return view('welcome');
})->name("index");

Route::get('/ab', function () {
    return view('ab');
})->name("about") ;

Route::get('/cont', function () {
    return view('cont');
})->name("contact") ;

Route::get('/ev', function () {
    return view('ev');
})->name("events") ;

Route::get('/prog', function () {
    return view('prog');
})->name("program") ;

Route::get('/train', function () {
    return view('train');
})->name("trainers") ;
