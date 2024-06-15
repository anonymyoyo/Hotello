<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ): Response
    {

        // if(Auth::id()){
        //     return redirect('login');
        // }

        // $user = Auth::user();
        // if(in_array($user->roles, $roles)=='admin'){

        // }


        if(Auth::id()){
            if(Auth::user()->roles == '1'){
            return view('admin.dashboard');
            }
            elseif (Auth::user()->roles =='2') {
                # code...
                return view('gerant.dashboard');
            }
            elseif (Auth::user()->roles == '3') {
                # code...
                return view('user.home');
            }
        }
        // }
        // else{
        //     return redirect()->back()->with("error", "Vous n'avez pas les droits requis")->with("error", "Vous n'avez pas les droits requis");
        // }

        return $next($request);
    }
}
