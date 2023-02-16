<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
    return view('home');
});

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login/checkLogin', [LoginController::class, 'checkLogin'])->name('checkLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/login/successlogin', [LoginController::class, 'successLogin'])->name('successLogin');


Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/posts/all', [App\Http\Controllers\PostController::class, 'all'])->name('posts.all');
Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');
