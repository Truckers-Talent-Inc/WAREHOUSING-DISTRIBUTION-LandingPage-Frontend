<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Redirecciones al sitio principal
Route::get('/login', function () { return redirect('https://www.truckerstalent.com/'); })->name('login');