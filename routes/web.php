<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BlogController;
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

Route::get('/blog', [BlogController::class, 'Index'])->name('blog');
Route::get('/blog/create', [BlogController::class, 'Create'])->name('blog.create');
Route::post('/blog/create', [BlogController::class, 'CreatePost']);