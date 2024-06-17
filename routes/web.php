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

Route::get('/post/new', [\App\Http\Controllers\PostController::class, 'newPost'],  function () {
    return view('newPost');
});

Route::get('/post/list', [\App\Http\Controllers\PostController::class, 'listPost'],  function () {
    return view('listPost');
});

Route::post('/example-submit', [\App\Http\Controllers\PostController::class, 'submit'])->name('example.submit');
