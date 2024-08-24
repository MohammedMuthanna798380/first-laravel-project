<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputerControrller;
use App\Http\Controllers\ContactsControaller;


Route::get('/portfolio', [StaticController::class, 'portfolio']);

Route::get('/', [StaticController::class, 'index'])->name('home.index');
Route::get('/about', [StaticController::class, 'about'])->name('home.about');
Route::get('/content', [StaticController::class, 'content'])->name('home.content');

Route::resource('computer', ComputerControrller::class);
Route::resource('contact', ContactsControaller::class);
