<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');
