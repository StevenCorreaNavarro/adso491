<?php

namespace App\Http\Controllers;

use App\Models\Trucker; 
use App\Models\Truck; 
use Illuminate\Http\Request;

class TruckerTruckController extends Controller
{
    public function asociar()
    {

        $truckers = Trucker::all();
        $trucks = Truck::all();
        return view('trucker_truck.asociar', compact('truckers', 'trucks'));
    }

    public function store(Request $request)
    {

        // $user = User::find($request->user_id);

        // $user->roles()->attach($request->role_id);
        return 'hola desde asociar camionero';
    }
}
