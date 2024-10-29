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
        return view('admin.user.table');
    })->name('admin.user.index');

    Route::get('/users/create', function () {
        return view('admin.user.form');
    })->name('admin.user.create');

    Route::get('/clients', function () {
        return view('admin.client.table');
    })->name('admin.client.index');

    Route::get('/clients/message', function () {
        return view('admin.client.message');
    })->name('admin.client.message');

});



