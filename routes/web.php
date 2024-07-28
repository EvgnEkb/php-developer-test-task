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

Route::get('/', static function () {
    return view('index');
});

Route::get('/login', static function () {
    return view('login');
})->name('login');

Route::get('/reg', static function () {
    return view('reg');
})->name('reg');

Route::get('/reg-success', static function () {
    return view('reg_success');
})->name('reg-success');
