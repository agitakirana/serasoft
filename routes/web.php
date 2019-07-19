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

Route::get('/', function () { return view('home'); })->name('home');
Route::get('/shop', function() { return view('shop'); })->name('shop');
Route::get('/get-the-look', function() { return view('get-the-look'); })->name('get-the-look');
Route::get('/explore-more', function() { return view('explore-more'); })->name('explore-more');