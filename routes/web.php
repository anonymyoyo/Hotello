<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\GerantController;
use App\Http\Controllers\HomeController;
// use App\Http\Middleware\Admins;


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

// Route::get('/home',[HomeController::class, 'redirect']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');name('gerant.')->prefix('gerant')->

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('admin/gerant', [AdminController::class, 'gerant'])->name('list');
    Route::get('gerant/store', [AdminController::class, 'store'])->name('create');
    Route::post('store/add', [AdminController::class, 'add'])->name('add.gerant');
    Route::get('gerant/detail', [AdminController::class, 'detail'])->name('detail');
    });

// Route::middleware(['auth', 'gerants'])->group(function(){
//     Route::get('Gerants', [GerantController::class, 'index'])->name('dashboard');
// });

// Route::middleware(['auth', 'client'])->group(function(){
//     Route::get('user', [UserController::class, 'index'])->name('profile');
// });

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






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
