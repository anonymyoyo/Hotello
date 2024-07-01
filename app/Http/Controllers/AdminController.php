<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Admin;
use Illuminate\Http\Request;
// use App\Http\Controllers\

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard');
    }

    public function gerant(){
        return view('admin.gerant.list');
    }

    public function store(){
        return view('admin.gerant.create');
    }

    public function add(){

    }
}
