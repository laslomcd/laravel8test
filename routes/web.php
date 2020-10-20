<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Auth::routes();

Route::get('/home', [PostController::class, 'index'])->name('home');
Route::get('post/create', [PostController::class, 'create']);
Route::post('post', [PostController::class, 'store']);
Route::get('post/{post}/edit', [PostController::class, 'edit']);
Route::get('post/{post}', [PostController::class, 'show']);
Route::put('post/{post}', [PostController::class, 'update']);
Route::delete('post/{post}', [PostController::class, 'destroy']);
Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
