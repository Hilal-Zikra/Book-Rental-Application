<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [UserController::class, 'showRegister'])->middleware('guest');
Route::post('/register', [UserController::class,'store'])->name('register.store');

Route::get('/login', [UserController::class, 'showLogin'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.store');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/books', [BookController::class, 'index'])->name('book');
Route::post('/rent-book', [BookController::class, 'rentBook'])->name('rent-book');

Route::get('/profile', [UserController::class, 'profile'])->name('profile');