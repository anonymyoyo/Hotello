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

    public function index2(){
        // $users=User::find($id);

        // return $users;

        return view('user.home');

        }
}
