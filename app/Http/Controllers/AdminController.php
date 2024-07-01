<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Admin;
use App\Models\Hotel;
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

    public function add(Request $request){
        Hotel::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'localisation'=>$request->localisation,
            'etoiles'=>$request->etoiles,
            'nbre_chambres'=>$request->nbre_chambres,
        ]);
        return to_route('list')->with('message', 'Gerant ajoute avec success');
    }
}
