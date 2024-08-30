<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public function redirect()
    {

    }


    public function index()
    {
        // $user=User::where('id', auth()->user()->roles_id)->find($id);
        // $user=User::find($id);

        // return $user;, compact('user')
        return view('user.home');
    }
}
