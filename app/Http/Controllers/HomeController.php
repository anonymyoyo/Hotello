<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Models\User;

class HomeController extends Controller
{
    //

    public function redirect()
    {
        // if(Auth::id())
        // {
        //     if(Auth::user()->roles=='0'){
        //         return view('admin.dashboard');
        //     }
        //     elseif (Auth::user()->roles=='1') {
        //         # code...
        //             return view('gerant.dashboard');
        //         }
        //         elseif(Auth::User()->roles=='2')
        //         {
        //             return view('user.home');
        //         }
        //     // if(Auth::User()->){
        //     //
        //     //     }
        //     //
        //     //
        // }
        // else
        // {
        //     return redirect()->back();
        // }
    }


    public function index()
    {
        return view('user.home');
    }
}
