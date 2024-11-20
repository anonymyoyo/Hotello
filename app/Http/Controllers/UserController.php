<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function user_dashboard(){
        return view('user.user.profile');
    }

    public function user_reservations(){
        return view('user.user.profile');
    }

    public function user_favoris(){
        return view('user.user.profile');
    }

    public function user_reglages(){
        return view('user.user.profile');
    }

    public function user_voyages(){
        return view('user.user.profile');
    }

    public function user_transactions(){
        return view('user.user.profile');
    }

    public function user_aide(){
        return view('user.user.profile');
    }
}
