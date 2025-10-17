<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/invoice', function () {
    return view('invoice');
});
Route::get('/invoice2', function () {
    return view('invoice2');
});

