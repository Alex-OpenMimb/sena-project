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


//Route::get('/login', function () {
//    return view('auth.login');
//})->name('login');

Route::prefix('admin')->group(function () {

    Route::get('/users',[\App\Http\Controllers\UserController::class,'index'])->name('admin.user.index');
    Route::get('/users/create',[\App\Http\Controllers\UserController::class,'create'])->name('admin.user.create');



    Route::get('/clients', function () {
        return view('admin.client.table');
    })->name('admin.client.index');

    Route::get('/clients/message', function () {
        return view('admin.client.message');
    })->name('admin.client.message');

    Route::get('/services', function () {
        return view('admin.service.table');
    })->name('admin.service.index');

    Route::get('/services/create', function () {
        return view('admin.service.form');
    })->name('admin.service.create');

    Route::get('/services-order', function () {
        return view('admin.serviceOrder.table');
    })->name('admin.service-order.index');

    Route::get('/services-order/create', function () {
        return view('admin.serviceOrder.form');
    })->name('admin.service-order.create');

    Route::get('/invoice', function () {
        return view('admin.invoice.table');
    })->name('admin.invoice.index');

    Route::get('/invoice/create', function () {
        return view('admin.invoice.form');
    })->name('admin.invoice.create');

});



