<?php

use App\Http\Controllers\Site\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Models\Contact;

Route::get('/', [HomeController::class, 'index'])->name('site.home');

/* contact route */
Route::post('/contact', [ContactController::class, 'store'])->name('site.contact.store');