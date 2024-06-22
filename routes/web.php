<?php

use App\Http\Controllers\Api\PostApiController;
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

Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::post('/post/save', [PostController::class, 'save'])->name('post.save');
Route::get('/post/new', [PostController::class, 'new'])->name('post.new');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::delete('/post/delete/{id}', [PostController::class, 'delete'])->name('post.delete');

/**
 * API
 */
Route::post('/post/ajax', [PostApiController::class, 'ajax'])->name('post.ajax');
