<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/materials', function () {
    return view('materials');
});

Route::get('/contacts', function () {
    return view('contacts');
});