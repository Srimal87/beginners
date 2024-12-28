<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home'); // Home page
Route::view('/user', 'user')->name('user'); // User page

