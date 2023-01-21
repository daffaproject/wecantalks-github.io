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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/abjad', function () {
    return view('abjad');
});

Route::get('/angka', function () {
    return view('angka');
});

Route::get('/hijaiyah', function () {
    return view('hijaiyah');
});

Route::get('/emosi', function () {
    return view('emosi');
});


Route::get('/imkla', function () {
    return view('imkla');
});

Route::get('/imknilai', function () {
    return view('imknilai');
});