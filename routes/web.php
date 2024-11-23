<?php

use Illuminate\Support\Facades\Route;

// .../
Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

// .../about
Route::get('/category', function () {
    return view('category');

});

//.../blog
Route::get('/aboutUs', function () {
    return view('aboutUs');

});

Route::get('/login', function () {
    return view('login');
});

// EVENT CARD ROUTING
Route::get('/k-pop', function () {
    return view('k-pop');
})->name('k-pop');

Route::get('/rock', function () {
    return view('rock');
})->name('rock');

Route::get('/pop', function () {
    return view('pop');
})->name('pop');

Route::get('/cosplay', function () {
    return view('cosplay');
})->name('cosplay');

Route::get('/koplo', function () {
    return view('koplo');
})->name('koplo');


//.../contact

//.../
