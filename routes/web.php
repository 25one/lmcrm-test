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

Auth::routes();

Route::get('/', function(){
    if (! auth()->user()) return redirect(route('login'));
    else return redirect(route('home'));
})->name('loginform');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/show/{id}', 'HomeController@show')->name('show');
