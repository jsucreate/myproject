<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/



Route::get('/', 'HomeController@index')->name('home');
Route::post('/save', 'HomeController@save')->name('save');
Route::get('/login', 'HomeController@login');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
