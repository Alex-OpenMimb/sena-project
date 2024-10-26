<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('webSite.home');
})->name('home');

Route::get('/service', function () {
    return view('webSite.service');
})->name('service');

Route::get('/contact', function () {
    return view('webSite.contact');
})->name('contact');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return view('admin.user.index');
    })->name('admin.user.index');

});



