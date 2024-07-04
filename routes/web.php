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

    // Routes concernant le gerant
    Route::get('admin/gerant', [AdminController::class, 'gerant'])->name('list');
    Route::get('gerant/store', [AdminController::class, 'store'])->name('create');
    Route::post('store/add', [AdminController::class, 'add'])->name('add.gerant');
    Route::get('gerant/detail/{id}', [AdminController::class, 'detail'])->name('detail');

    // Routes concernant les chambres
    Route::get('admin/booking', [AdminController::class, 'booking'])->name('booking.list');
    // Route::get('admin/booking', [AdminController::class, 'booking'])->name('booking.list');
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
