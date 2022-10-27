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

Route::get('/sobre_nos', function () {
    return view('layout.about');
});

Route::get('/contato', function () {
    return view('layout.contact');
});

Route::get('/faq', function () {
    return view('layout.faq');
});

Route::get('/blog', function () {
    return view('layout.news');
});

Route::get('/areas', function () {
    return view('layout.practices');
});

Route::get('/equipe', function () {
    return view('layout.team');
});


Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');