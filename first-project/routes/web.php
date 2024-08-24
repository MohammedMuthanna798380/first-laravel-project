<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputerControrller;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/about/person', function () {
//     $name = request('name');

//     if(isset($name))
//         return 'This is  <span style="color:blue">' .strip_tags($name).'</span>';
//     return 'This is  <span style="color:blue">Mohammed</span>';
// });

// Route::get('/about/{name?}/{age?}', function ($name = null, $age = null) {
//     if(isset($name)){
//         if(isset($age))
//             return "This is about <span style='color:blue'> {$name}</span> and he is <span style='color:blue'> {$age}</span> years old";
//         return 'This is about <span style="color:blue">' .strip_tags($name).'</span>';
//     }
// });


Route::get('/portfolio', [StaticController::class, 'portfolio']);

Route::get('/', [StaticController::class, 'index'])->name('home.index');
Route::get('/about', [StaticController::class, 'about'] )->name('home.about');
Route::get('/content', [StaticController::class, 'content'])->name('home.content');

Route::resource('computer', ComputerControrller::class);
