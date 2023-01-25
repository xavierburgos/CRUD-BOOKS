<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Rout::get('/books', 'App\Http\Controllers\BookController@index');
Rout::post('/books', 'App\Http\Controllers\BookController@store');
Rout::put('/books/{id}', 'App\Http\Controllers\BookController@update');
Rout::delete('/books/{id}', 'App\Http\Controllers\BookController@destroy');

Rout::get('/autores', 'App\Http\Controllers\AutorController@index');
Rout::post('/autores', 'App\Http\Controllers\AutorController@store');