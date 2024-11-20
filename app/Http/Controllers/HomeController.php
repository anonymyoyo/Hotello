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
        return view('user.home');
    }

    public function hotel()
    {
        return view('user.hotel');
    }

    public function flight()
    {
        return view('user.flight');
    }

    public function tourisme()
    {
        return view('user.tourisme');
    }

    public function cab()
    {
        return view('user.cab');
    }

    public function directory()
    {
        return view('user.directory');
    }

    public function add_listing()
    {
        return view('user.add_listing');
    }

    public function hero()
    {
        return view('user.hero');
    }

    public function compare()
    {
        return view('user.compare');
    }

    public function offre()
    {
        return view('user.offre');
    }
}
