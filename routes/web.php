<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\GerantController;
use App\Http\Controllers\HomeController;
// use App\Http\Middleware\Admins;


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

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
    Route::get('admin/Booking', [AdminController::class, 'booking'])->name('booking.list');
    // Route::get('admin/booking', [AdminController::class, 'booking'])->name('booking.list');

        // Routes concernant les Vols
        Route::get('admin/Vols', [AdminController::class, 'vols'])->name('vol.list');

            // Routes concernant les Tourisme
    Route::get('admin/tourisme', [AdminController::class, 'tourisme'])->name('tourism.grid');

        // Routes concernant les locations d'engins
        Route::get('admin/cab', [AdminController::class, 'cab'])->name('cab.list');

    //         // Routes concernant les chambres
    // Route::get('admin/booking', [AdminController::class, 'booking'])->name('booking.list');

    //     // Routes concernant les chambres
    //     Route::get('admin/booking', [AdminController::class, 'booking'])->name('booking.list');
});

Route::middleware(['auth', 'geran'])->group(function(){
    Route::get('geran/dashboard', [GerantController::class, 'dashboard'])->name('page');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
