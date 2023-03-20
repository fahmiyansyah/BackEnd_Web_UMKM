<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrasiadmin', function () {
    return view('registrasiadmin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/faqedit', function () {
    return view('faqedit');
});

Route::get('/detailregist', function () {
    return view('detailregist');
});

Route::get('/user_management', function () {
    return view('user_management');
});

Route::get('/userdetail', function () {
    return view('userdetail');
});

Route::get('/registermasuk', function () {
    return view('registermasuk');
});

Route::get('/register', function () {
    return view('register');
});

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//REGISTER

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');