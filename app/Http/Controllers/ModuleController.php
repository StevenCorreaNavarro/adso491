<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\Module;
use App\Models\Student;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function listar()
    {
        // $user = User::find(1);

        // return $user->profile;                          $students  se escribe igual compact('students'));
        $modules = Module::orderBy('id', 'desc')->get();   // la intermedia
        return view('module_carpet.listar', compact('modules'));
        
    }





    // public function asociar()
    // {

    //     $users = Teacher::all();
    //     $roles = Module::all();
    //     return view('module_carpet.create', compact('users', 'roles'));
    // }

 //ojooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo adapte asociar con create
    public function create()
    { // crear formulario
        // $teacher=Teacher::pluck('id');
        $teacher = Teacher::all();
        $student = Student::all();
        return view('module_carpet.create', compact('teacher', 'student'));
    }

    
    public function store(Request $request)


    //aplicar a asociaf
    {
        $dato = new Module();

        $dato->codigo = $request->codigo;
        $dato->nombre_modulo = $request->nombre_modulo;


        //los que se asocian
        $dato->id_profesor = $request->id_profesor;
        // $dato->nombre_profesor = $request->nombre_profesor;
        $dato->id_student = $request->id_student;
        $dato->save();
        // return $dato;
        return redirect()->route('module.listar');        // para llevar al la lista o direccionar ruta 
    }
    public function show( $id){
        $module=Module::find($id);
        
        return view('module_carpet.show', compact('module'));
    }
    public function destroy(Module $dato)
    {
        $dato->delete();
        return redirect()->route('module.listar');
    }

    //Edit
    public function edit(Module $dato)
    { //Encuentro el dato

        return view('module_carpet.edit', compact('dato'));
    }
    //Update
    public function update(Request $request, Module $dato)
    {
        $dato->codigo = $request->codigo;
        $dato->nombre_modulo = $request->nombre_modulo;
        $dato->id_profesor = $request->id_profesor;
        $dato->id_student = $request->id_student;

        $dato->save();

        return redirect()->route('module.listar');  //ruta web
    }
}
