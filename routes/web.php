<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerController; 

Route::get('/', function () {
    return view('welcome');
});

Route::post('/email', [PartnerController::class, 'store'])->name('partner.store');

