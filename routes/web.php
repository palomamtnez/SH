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

Route::group(['middleware' => 'auth'], function(){

    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/', function () { return view('dashboard'); })->name('home');

    Route::get('/challenges', function () { return view('challenges/index'); })->name('challenges');
    Route::get('/challenges/shift-challenge', function () { return view('challenges/shift-challenge'); })->name('challenges.shit-challenge');

});

require __DIR__.'/auth.php';
