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
Route::get('/hair-myths', function() { return view('hair-myths'); })->name('hair-myths');
Route::get('/perfect-curls', function() { return view('perfect-curls'); })->name('perfect-curls');
Route::get('/everyday-bun', function() { return view('everyday-bun'); })->name('everyday-bun');
Route::get('/saya-sudah-serasoft', function() { return view('saya-sudah-serasoft'); })->name('saya-sudah-serasoft');
Route::get('/diagnose-cover', function() { return view('diagnose-cover'); })->name('diagnose-cover');
Route::get('/diagnose-hair', function() { return view('diagnose-hair'); })->name('diagnose-hair');
Route::get('/diagnose-result', function() { return view('diagnose-result'); })->name('diagnose-result');