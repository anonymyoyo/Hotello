<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //page d'acceuill
    public function index()
    {
        return view('user.home');
    }

    // hotel cote client
    public function hotel()
    {
        return view('user.hotel');
    }

    // vol cote client
    public function flight()
    {
        return view('user.flight');
    }

    // tourisme cote client
    public function tourisme()
    {
        return view('user.tourisme');
    }

    // location auto cote client
    public function cab()
    {
        return view('user.cab');
    }

    // explorer cote client
    public function directory()
    {
        return view('user.directory');
    }

    // liste de reservation cote client
    public function add_listing()
    {
        return view('user.add_listing');
    }

    // recherche destination cote client
    public function hero()
    {
        return view('user.hero');
    }

    // page comparaison cote client
    public function compare()
    {
        return view('user.compare');
    }

    // page offre cote client
    public function offre()
    {
        return view('user.offre');
    }
}
