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
    return view('client.index');
});

Route::get('/login', function () {
    return view('client.auth.login');
});

Route::get('/doctors', function () {
    return view('client.doctor.index');
});

Route::get('/doctors/featured', function () {
    return view('client.doctor.show-featured');
});

Route::get('/booking', function () {
    return view('client.booking.index');
});

Route::get('/diseases', function () {
    return view('client.disease.index');
});

Route::get('/disease', function () {
    return view('client.disease.show');
});

Route::get('/contact-us', function () {
    return view('client.contact.index');
});

Route::get('/about-us', function () {
    return view('client.about.index');
});