<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GerantController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\admin;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

// Route::get('/home',[HomeController::class, 'redirect']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('admin', [AdminController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth', 'gerant'])->group(function(){
    Route::get('gerant', [GerantController::class, 'index'])->name('dashborard');
});

// Route::get('/gerant_dashboard', function () {
//     return view('gerant.dashboard');->prefix('admin')->name('admin.')
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware(['auth', 'admin'])->group(function(){
//     Route::get('admin', [AdminController::class, 'index'])->name('dashboard');
// });

// Route::middleware(['auth', 'gerant'])->group(function(){
//     Route::get('gerant', [GerantController::class, 'index'])->name('dashboard');
// });

// Route::middleware(['auth', 'client'])->group(function(){
//     Route::get('user', [UserController::class, 'index'])->name('profile');
// });

// Route::get('/', function () {
//     return view('user.home');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
