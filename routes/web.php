<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\GerantController;
use App\Http\Controllers\HomeController;
// use App\Http\Middleware\Admins;


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'hotel'])->name('hotel');
Route::get('/', [HomeController::class, 'flight'])->name('flight');
Route::get('/', [HomeController::class, 'tourisme'])->name('tourisme');
Route::get('/', [HomeController::class, 'cab'])->name('cab');
Route::get('/', [HomeController::class, 'directory'])->name('directory');
Route::get('/', [HomeController::class, 'add_listing'])->name('add_listing');
Route::get('/', [HomeController::class, 'hero'])->name('hero');
Route::get('/', [HomeController::class, 'compare'])->name('compare');
Route::get('/', [HomeController::class, 'offre'])->name('offre');


// Routes concernant les traitement admin
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Routes concernant le gerant
    Route::get('admin/gerant', [AdminController::class, 'gerant'])->name('list');
    Route::get('gerant/store', [AdminController::class, 'store'])->name('create');
    Route::post('store/add', [AdminController::class, 'add'])->name('add.gerant');
    Route::get('gerant/detail/{id}', [AdminController::class, 'detail'])->name('detail');
    Route::get('gerant/edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::put('gerant/update/{id}', [AdminController::class, 'update'])->name('edit.gerant');
    Route::delete('gerant/delete/{id}', [AdminController::class, 'delete'])->name('delete');

    // Routes Admin concernant les Utilisateurs
    Route::get('admin/guest', [AdminController::class, 'guest'])->name('guest.list');
    Route::get('guest/store', [AdminController::class, 'store_guest'])->name('guest.create');
    Route::post('guest/add', [AdminController::class, 'add_guest'])->name('guest.add');
    Route::get('guest/detail/{id}', [AdminController::class, 'detail_guest'])->name('guest.detail');


    // Routes Admin concernant les chambres
    Route::get('admin/Booking', [AdminController::class, 'booking'])->name('booking.list');
    Route::get('booking/category', [AdminController::class, 'category_room'])->name('category.room');
    Route::get('category/room', [AdminController::class, 'room_category'])->name('room.category');
    // Route::get('room/category', [AdminController::class, 'category_room'])->name('category.room');
    Route::post('room/add', [AdminController::class, 'add_category_room'])->name('add_room_category');
    Route::delete('room/category/{id}', [AdminController::class, 'delete_room_category'])->name('delete_room_category');

    // Routes Admin concernant les Vols
    Route::get('admin/Vols', [AdminController::class, 'vols'])->name('vol.list');

            // Routes Admin concernant les Tourisme
    Route::get('admin/tourisme', [AdminController::class, 'tourisme'])->name('tourism.grid');

    // Routes Admin concernant les locations d'engins
    Route::get('admin/cab', [AdminController::class, 'cab'])->name('cab.list');

    //         // Routes concernant les chambres
    // Route::get('admin/booking', [AdminController::class, 'booking'])->name('booking.list');

    //     // Routes concernant les chambres
    //     Route::get('admin/booking', [AdminController::class, 'booking'])->name('booking.list');
});

// Routes concernant les traitement gerant
Route::middleware(['auth', 'gerant'])->group(function(){
    Route::get('gerant/dashboard', [GerantController::class, 'dashboard'])->name('page');
    Route::get('gerant/listing', [GerantController::class, 'gerant_listing'])->name('gerant.listing');
    Route::get('gerant/hotel', [GerantController::class, 'gerant_hotel'])->name('create.hotel');
    Route::post('hotel/ajouter', [GerantController::class, 'ajouter_hotel'])->name('add.hotel');
    Route::get('gerant/booking', [GerantController::class, 'gerant_booking'])->name('gerant.booking');
    Route::get('gerant/rooms', [GerantController::class, 'gerant_rooms'])->name('gerant.rooms');
    Route::get('rooms/add', [GerantController::class, 'create_rooms'])->name('create.chambres');
    Route::post('room added', [GerantController::class, 'add_chambre'])->name('add.chambre');
    Route::get('gerant/activity', [GerantController::class, 'gerant_activity'])->name('gerant.activity');
    Route::get('gerant/earning', [GerantController::class, 'gerant_earning'])->name('gerant.earning');
    Route::get('gerant/review', [GerantController::class, 'gerant_review'])->name('gerant.review');
    Route::get('gerant/setting', [GerantController::class, 'gerant_setting'])->name('gerant.setting');
});

// Routes concernant les traitement user
Route::middleware(['auth', 'user'])->group(function(){
    Route::get('user/dashboard', [UserController::class, 'user_dashboard'])->name('profile');
    Route::get('Home/', [UserController::class, 'index2'])->name('home2');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
