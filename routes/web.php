<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\GerantController;
use App\Http\Controllers\HomeController;
// use App\Http\Middleware\Admins;


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hotel', [HomeController::class, 'hotel'])->name('hotel');
Route::get('/flight', [HomeController::class, 'flight'])->name('flight');
Route::get('/tourisme', [HomeController::class, 'tourisme'])->name('tourisme');
Route::get('/cab', [HomeController::class, 'cab'])->name('cab');
Route::get('/directory', [HomeController::class, 'directory'])->name('directory');
Route::get('/liste des reservations', [HomeController::class, 'add_listing'])->name('add_listing');
Route::get('/hero', [HomeController::class, 'hero'])->name('hero');
Route::get('/comparer', [HomeController::class, 'compare'])->name('compare');
Route::get('/offre', [HomeController::class, 'offre'])->name('offre');


// Routes concernant les traitement admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('admin/messagerie', [AdminController::class, 'admin_messagerie'])->name('admin.messagerie');

    // Routes concernant le gerant
    Route::get('admin/gerant', [AdminController::class, 'gerant'])->name('list');
    Route::get('gerant/store', [AdminController::class, 'store'])->name('create');
    Route::post('store/add', [AdminController::class, 'add'])->name('add.gerant');
    Route::get('gerant/detail/{id}', [AdminController::class, 'detail'])->name('detail');
    Route::get('gerant/contact/{id}', [AdminController::class, 'contact'])->name('admin.contact');
    Route::post('gerant/message', [AdminController::class, 'admin_contact'])->name('admin.message');
    Route::get('gerant/edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::put('gerant/update/{id}', [AdminController::class, 'update'])->name('edit.gerant');
    Route::delete('gerant/delete/{id}', [AdminController::class, 'delete'])->name('delete');

    // Routes Admin concernant les Utilisateurs
    Route::get('admin/guest/client', [AdminController::class, 'guest_client'])->name('guest.list_client');
    Route::get('admin/guest/gerant', [AdminController::class, 'guest_gerant'])->name('guest.list_gerant');
    Route::get('guest/store', [AdminController::class, 'store_guest'])->name('guest.create');
    Route::post('guest/add', [AdminController::class, 'add_guest'])->name('guest.add');
    Route::get('guest/detail/client{id}', [AdminController::class, 'detail_guest_client'])->name('guest_client.detail');
    Route::get('guest/detail/gerant{id}', [AdminController::class, 'detail_guest_gerant'])->name('guest_gerant.detail');
    Route::get('admin/guest/edit/gerant{id}', [AdminController::class, 'edit_guest_gerant'])->name('guest_gerant.edit');
    Route::put('admin/guest/update/gerant{id}', [AdminController::class, 'update_guest_gerant'])->name('guest_gerant.update');
    Route::delete('admin/guest/delete/gerant{id}', [AdminController::class, 'delete_guest_gerant'])->name('guest_gerant.delete');


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
Route::middleware(['auth', 'gerant'])->group(function () {
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
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('user/dashboard', [UserController::class, 'user_dashboard'])->name('profile');
    Route::get('user/reservations', [UserController::class, 'user_reservations'])->name('user.reservations');
    Route::get('user/favoris', [UserController::class, 'user_favoris'])->name('user.favoris');
    Route::get('user/reglages', [UserController::class, 'user_reglages'])->name('user.reglages');
    Route::get('user/voyages', [UserController::class, 'user_voyages'])->name('user.voyages');
    Route::get('user/transactions', [UserController::class, 'user_transactions'])->name('user.transactions');
    Route::get('user/aide', [UserController::class, 'user_aide'])->name('user.aide');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
