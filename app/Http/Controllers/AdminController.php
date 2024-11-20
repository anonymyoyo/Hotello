<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Chambre;
use App\Models\Hotel;
use App\Models\Roles;
use App\Models\Room_Category;
use App\Models\User;
use Illuminate\Http\Request;
// use App\Http\Controllers\

class AdminController extends Controller
{
    //
    public function index(){
        $hotelCount=Hotel::count();
        $roomCounter=Chambre::count();

        //return $hotelCount;
        return view('admin.dashboard', compact('hotelCount', 'roomCounter'));
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
        // $hotels=Hotel::where('user_id', auth()->user()->id)->get();,'hotels'
        $roomCounter=Chambre::count();
        $hotel=Hotel::find($id);
        $lists=Hotel::all();
        return view('admin.gerant.detail', compact('hotel', 'id', 'lists', 'users','roomCounter'));
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

    public function delete($id){
        $hotel=Hotel::find($id);
        $hotel->delete();

        return to_route('list')->with('message', 'Hotel supprime avec success');

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
            'email2'=>$request->email2,
            'phone'=>$request->phone,
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

    // Gestion des utilisateurs
    // ***
    // ***

    public function guest(){
        $user=User::all();
        $role=Roles::all();
        return view('admin.guest.list', compact('user', 'role'));
    }

    public function store_guest(){
        return view('admin.guest.create');
    }

    public function add_guest(Request $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'addresse'=>$request->addresse,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'roles_id'=>'3',
            'password'=>$request->password,
        ]);
        return to_route('guest.list')->with('message', 'gerant cree avec succes');
    }

    public function detail_guest($id){
        $user=User::find($id);
        $hotel=User::find($id)->hotels;

        // return $hotel;
        return view('admin.guest.detail', compact('id', 'user', 'hotel'));

    }

    // **
    // **
    // Gestion d'utilisateur

    // Gestion des Chambres
    // ***
    // ***
    public function booking(){
        return view('admin.booking.list');
    }

    public function room_category(){
        return view('admin.booking.create');
    }

    public function category_room(){
        $categories = Room_Category::all();
        return view('admin.booking.room_category', compact('categories'));
    }

    public function add_category_room(Request $request){
        Room_Category::create([
            'name'=>$request->name,
        ]);

        return to_route('category.room')->with('message', 'Categorie Ajoute avec succes');
    }

    public function delete_room_category($id){
        $category=Room_Category::find($id);
        $category->delete();

        return to_route('category.room')->with('message', ' supprime avec success');

    }

    // public function create_rooms(){
    //     $gerant=Hotel::where('user_id', auth()->user()->id)->get();
    //     $room_category=Room_Category::all();
    //     // return $gerant;
    //     return view('gerant.booking.create', compact('gerant', 'room_category'));
    // }

    // public function add_chambre(Request $request){
    //         Room_Category::all();
    //     $chambre=Chambre::create([
    //         'name'=>$request->name,
    //         'quantite'=>$request->quantite,
    //         'hotel_id'=>$request->hotel_id,
    //         'user_id'=>$request->user_id,
    //         'room_category'=>$request->room_category,
    //         'statut'=>$request->statut,
    //         'type'=>$request->type,
    //         'prix'=>$request->prix,
    //     ]);

    //     return $chambre;

    //     // return to_route('gerant.room')->with('message', 'Room added succefully');
    // }
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
