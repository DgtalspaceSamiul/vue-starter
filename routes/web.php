<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    
    Route::get('todo', function (){
        return Inertia::render('Todo');
    })->name('todo');
    Route::get('chat', function (){
        return Inertia::render('Chat');
    })->name('chat');
    Route::get('email', function (){
        return Inertia::render('Email');
    })->name('email');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
