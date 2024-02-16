
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\OrderController;




//Login
Route::get('/user_login', function () {
    return view('user_login');
});
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');
Route::get('/logout', [UserController::class, 'logout']);

// User Side
Route::get('/user_account', [StudentController::class, 'view_account']);
Route::get('/user_merch', [OrderController::class, 'index_product']);
Route::get('/user_courses', [ClassController::class, 'index']);
Route::get('/user_dashboard', function () {
    return view('user_dashboard');
});
Route::get('/user_inbox', function () {
    return view('user_inbox');
});

// Admin
Route::get('/students', function () {
    return view('students');
});
Route::get('/students', [StudentController::class, 'index']);
Route::get('/admin_account', function () {
    return view('admin_account');
});
Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
});
Route::get('/admin_messages', function () {
    return view('admin_messages');
});
Route::get('/admin_notification', function () {
    return view('admin_notification');
});
Route::get('/admin_faculty', function () {
    return view('admin_faculty');
});
Route::get('/admin_department', function () {
    return view('admin_department');
});
Route::get('/admin_enrollment', function () {
    return view('admin_enrollment');
});
//Public
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/message_ceo', function () {
    return view('message_ceo');
});
Route::get('/merch', function () {
    return view('merch');
});
Route::get('/enroll', function () {
    return view('enroll');
});
Route::get('/inquire', function () {
    return view('inquire');
});

Route::get('/cs', function () {
    return view('cs');
});
