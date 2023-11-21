<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::post('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::post('/verify', function () {
    return view('login.verify');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/patientProfile', function () {
    return view('patientProfile');
});
