<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function (){
    return view('login');
})->name('login');

Route::get('/signup',function (){
    return view('signup');
})->name('signup');


