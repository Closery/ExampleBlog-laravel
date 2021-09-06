<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
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

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/register', [RegisterController::class, 'Index'])->name('register');
Route::post('/register', [RegisterController::class, 'Register']);

Route::get('/login', [LoginController::class, 'Index'])->name('login');
Route::post('/login', [LoginController::class, 'Login']);

Route::post('/logout', [LogoutController::class, 'Logout'])->name('logout');

Route::get('/blog/posts', [PostController::class, 'Index'])->name('blog');
Route::get('/blog/posts/create', [PostController::class, 'Create'])->name('blog.create');
Route::post('/blog/posts/create', [PostController::class, 'CreatePost']);
Route::post('/blog/posts/{post}/likePost', [PostController::class, 'LikePost'])->name('blog.likePost');
Route::delete('/blog/posts/{post}/unlinePost', [PostController::class, 'UnlikePost'])->name('blog.unlikePost');