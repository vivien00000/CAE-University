
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;


//Login
Route::get('/user_login', function () {
    return view('user_login');
});
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');

Route::get('/logout', [UserController::class, 'logout']);

// User Side
Route::get('/user_page', function () {
    return view('user_page');
});

// Admin

Route::get('/students', function () {
    return view('students');
});

Route::get('/students', [StudentController::class, 'index']);

Route::get('/profile', function(){
    return view('profile');
});


//Public
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function(){
    return view ('about');
});


