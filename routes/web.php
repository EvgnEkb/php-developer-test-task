<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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

Route::resource('messages', MessageController::class);
Route::get('/gravatar', 'App\Http\Controllers\GravatarController@gravatar');
Route::get('/', 'App\Http\Controllers\MessageController@index');
Route::get('/messages/delete/{id}', 'App\Http\Controllers\MessageController@delete')->name('messages.delete');

Route::get('/reg-success', static function () {
    return view('reg_success');
})->name('reg-success');
