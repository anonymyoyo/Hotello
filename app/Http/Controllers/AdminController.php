<?php

namespace App\Http\Controllers;


use App\Models\Hotel;
use App\Models\User;
use Illuminate\Http\Request;
// use App\Http\Controllers\

class AdminController extends Controller
{
    //
    public function index(){
        $hotelCount=Hotel::count();

        //return $hotelCount;
        return view('admin.dashboard');
    }

    // Gestion des gerant d'hotels
    // ***
    // ***
    public function gerant(){
        $hotels=Hotel::all();
        return view('admin.gerant.list', compact('hotels'));
    }

    public function detail($id){
        // $user=User::find($id);
        $users=User::all();
        $hotel=Hotel::find($id);
        $lists=Hotel::all();
        return view('admin.gerant.detail', compact('hotel', 'id', 'lists', 'users'));
    }

    public function edit( $id){

        $hotel=Hotel::find($id);

            return view('admin.gerant.edit', compact('hotel'));
    }

    public function update(Request $request,$id){

        $hotel=Hotel::find($id);
        $hotel->update([
            'name'=>$request->name,
            'user_id'=>$request->user_id,
            'genre'=>$request->genre,
            'email2'=>$request->email2,
            'phone'=>$request->phone,
            'license'=>$request->license,
            'tax_number'=>$request->tax_number,
            'email'=>$request->email,
            'localisation'=>$request->localisation,
            'etoiles'=>$request->etoiles,
            'nbre_chambres'=>$request->nbre_chambres,
            'description'=>$request->description,
        ]);
        return to_route('list')->with('message', 'Hotel Modifie avec success');

    }

    public function delete(){

    }

    public function store(){
        $users=User::all();
        return view('admin.gerant.create', compact('users'));
    }

    public function add(Request $request){
        User::all();
        Hotel::create([
            'name'=>$request->name,
            'user_id'=>$request->user_id,
            'genre'=>$request->genre,
            'email2'=>$request->email2,
            'phone'=>$request->phone,
            'license'=>$request->license,
            'tax_number'=>$request->tax_number,
            'email'=>$request->email,
            'localisation'=>$request->localisation,
            'etoiles'=>$request->etoiles,
            'nbre_chambres'=>$request->nbre_chambres,
            'description'=>$request->description,
        ]);
        return to_route('list')->with('message', 'Gerant ajoute avec success');
    }
    // ***
    // ***
    // Gestion des gerants d'hotels

    // Gestion des Chambres
    // ***
    // ***
    public function booking(){
        return view('admin.booking.list');
    }
    // ***
    // ***
    // Gestion des Chambres

    // Gestion des vols
    // ***
    // ***
    public function vols(){
        return view('admin.vols.list');
    }
    // ***
    // ***
    // Gestion des vols

    // Gestion des tourisme
    // ***
    // ***
    public function tourisme(){
        return view('admin.tourisme.list');
    }
    // ***
    // ***
    // Gestion des tourisme

    // Gestion des cab
    // ***
    // ***
    public function cab(){
        return view('admin.cab.list');
    }
    // ***
    // ***
    // Gestion des cab
}
