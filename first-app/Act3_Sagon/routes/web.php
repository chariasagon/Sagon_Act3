<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Default route to display the menu
Route::get('/', function () {
    return view('menu');
});

// Menu page route (optional since '/' alreadxy shows the menu)
Route::get('/menu', function () {
    return view('menu');
});

// Profile page route
Route::get('/profile', function () {
    return view('profile');
});

// Home page route
Route::get('/home', function () {
    return view('home');
});

// About page route
Route::get('/about', function () {
    return view('about');
});


// Display the contact form
Route::get('/contact', function () {
    return view('contact');
});

// Handle form submission and show success message
Route::post('/submit', function (Request $request) {
    // Flash a success message to the session
    session()->flash('success', 'Your message has been submitted successfully!');
    
    // Redirect back to the contact form to display the success message
    return redirect('/contact');
});



Route::get('/product', function () {
    return view('product');
});
