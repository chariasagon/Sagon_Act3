<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('navigation');
});


Route::get('/navigation', function () {
    return view('navigation');  // Make sure you have a 'navigation.blade.php' in your 'resources/views' folder.
});


Route::get('/home', function () {
    return view('home');
});


// // Default route to display the menu
// Route::get('/', function () {
//     return view('menu');
// });

// Menu page route (optional since '/' alreadxy shows the menu)
// Route::get('/menu', function () {
//     return view('menu');
// });

// // Profile page route
// Route::get('/profile', function () {
//     return view('profile');
// });



// About page route
Route::get('/about', function () {
    return view('about');
});


// Display the contact form
Route::get('/services', function () {
    return view('/services');
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



// Route::get('/product', function () {
//     return view('product');
// });
