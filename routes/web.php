<?php

use App\Http\Controllers\AdminController;
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

Route::get('/home', function () {return view('home');})->name('home');

Route::get('/admin',[AdminController::class, 'index'])->name('admin');
Route::post('/admin',[AdminController::class, 'store']);

Route::post('/logout',[AdminController::class, 'logout'])->name('logout');

Route::get('/create_post',[AdminController::class, 'create_post'])->name('create_post');

Route::get('/blog',[PostController::class, 'index'])->name('blog');
Route::post('/blog',[PostController::class, 'store']);

Route::redirect('/', '/home');
