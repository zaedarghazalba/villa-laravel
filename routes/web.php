<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/properties', function () {
    return view('properties');
})->name('properties');

Route::get('/property-details', function () {
    return view('property-details');
})->name('property-details');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
