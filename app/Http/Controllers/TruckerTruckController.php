<?php

namespace App\Http\Controllers;

use App\Models\TruckerTruck; 
use App\Models\Trucker; 
use App\Models\Truck; 
use Illuminate\Http\Request;

class TruckerTruckController extends Controller
{
    public function listar()
    {
        // $user = User::find(1);
        // return $user->profile;                          $students  se escribe igual compact('students'));
        $truckers = TruckerTruck::orderBy('id', 'desc')->get();   // la intermedia
        return view('trucker_truck.listar', compact('truckers'));
        // return view('trucker_truck.listar');
    }

    public function asociar()
    {
        $truckers = Trucker::all();
        $trucks = Truck::all();
        return view('trucker_truck.asociar', compact('truckers', 'trucks'));
    }

    public function store(Request $request)
    {
        $trucker = Trucker::find($request->trucker_id);
        $trucker->trucks()->attach($request->truck_id);
    //     $trucker->save();
    //     // return $curso;
    //     // return 'hola desde asociar camionero';
        // return redirect()->route('trucker_truck.listar');
    }
}
