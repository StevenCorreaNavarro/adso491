<?php

namespace App\Http\Controllers;

use App\Models\Trucker; 

use App\Models\Truck; 

use App\Models\Trucktrucker; 
use Illuminate\Http\Request;
//importante tener el  orden de los nombres con las tablas de la base de datos
class TruckerTruckController extends Controller
{
    public function listar()
    {
        // $user = User::find(1);
        // return $user->profile;                          $students  se escribe igual compact('students'));
        $trucktruckers = Trucktrucker::orderBy('id', 'desc')->get();   // la intermedia
        return view('trucker_truck.listar', compact('trucktruckers'));
        // return view('trucker_truck.listar');
    }

    public function asociar()
    {  
        $trucker = Trucker::all();
        $truck = Truck::all();
        return view('trucker_truck.asociar', compact('trucker', 'truck'));
    }

    public function store(Request $request)
    {
        $trucker = Trucker::find($request->trucker_id);
        $trucker->trucks()->attach($request->truck_id);
        // $trucker->save();
        // return $truckers;
    //     // return 'hola desde asociar camionero';
        return redirect()->route('trucker_truck.listar');
    }
}
