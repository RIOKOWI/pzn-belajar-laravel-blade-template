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
    return view('welcome');
});

// RENDERING VIEW
Route::get('/halo', function() {
    return view('hello', ['nama' => 'Gus Fring']);
});
Route::view('/hello', 'hello', ['nama' => 'del Rio']);


// NESTED VIEW DIRECTORY
Route::get('/nest', function() {
    return view('hello.world', ['nama' => 'Gus Bul']);
});