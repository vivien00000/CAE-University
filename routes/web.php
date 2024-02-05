<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user_login', function () {
    return view('user_login');
});
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');

Route::get('/', function () {
    return view('home');
});


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/enroll', function () {
    return view('enroll');
});

Route::get('/user_page', function () {
    return view('user_page');
});

Route::get('/user_account', function () {
    return view('user_account');
});
