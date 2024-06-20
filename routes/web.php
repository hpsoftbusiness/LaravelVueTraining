<?php

use App\Http\Controllers\PostController;
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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::post('/posts/save', [PostController::class, 'save'])->name('posts.save');
Route::delete('/posts/delete/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/search', [PostController::class, 'search'])->name('posts.search');
Route::post('/posts/ajax', [PostController::class, 'ajax'])->name('posts.ajax');
