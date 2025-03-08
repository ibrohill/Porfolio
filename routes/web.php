<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProjectController;

//Route::resource('projects', ProjectController::class);


// Page d'accueil
Route::get('/', function () {
    return view('index');
})->name('home');

// Page About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Page Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Page Portfolio
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

// Page Portfolio Details
Route::get('/portfolio-details', function () {
    return view('portfolio-details');
})->name('portfolio-details');

// Page Resume
Route::get('/resume', function () {
    return view('resume');
})->name('resume');

// Page Services
Route::get('/services', function () {
    return view('services');
})->name('services');

// Page Starter Page
Route::get('/starter-page', function () {
    return view('starter-page');
})->name('starter-page');
