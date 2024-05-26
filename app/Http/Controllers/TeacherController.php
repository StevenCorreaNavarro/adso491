<?php

namespace App\Http\Controllers;
use App\Models\Teacher; 
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function listar()
    {
        // $user = User::find(1);
        // return $user->profile;
        $teachers = Teacher::orderBy('id', 'desc')->get();    //consulta base de datos por orden descendente
        // return view('teacher.listar');
        return view('teacher.listar', compact('teachers')); // $teachers se escribe igual a  compact('teachers')); 
    }

    public function create()
    { // crear formulario
        return view('teacher.create');
    }

    public function store(Request $request)
    {
        $dato = new Teacher();

        $dato->dni = $request->dni;
        $dato->nombre_profesor = $request->nombre_profesor;
        $dato->direccion = $request->direccion;
        $dato->telefono = $request->telefono;
        $dato->save();
        // return $curso;
        return redirect()->route('teacher.listar');        // para llevar al la lista o direccionar
    }

    // public function show( $teacher)
    // { //$id
    //     // public function show(Teacher $teacher)
    //     // $dato=Teacher::find($id);
    //     return view('teacher.show', compact('teacher'));
    // }
    public function show( $id){
        $teacher=Teacher::find($id);
        return view('teacher.show', compact('teacher'));
    }

    public function destroy(Teacher $dato)
    {
        $dato->delete();
        return redirect()->route('teacher.listar');
    }

    //Edit
    public function edit(Teacher $dato)
    { //Encuentro el Curso
        return view('teacher.edit', compact('dato'));
    }

    //Update
    public function update(Request $request, Teacher $dato)
    {
        $dato->dni = $request->dni;
        $dato->nombre_profesor = $request->nombre_profesor;
        $dato->direccion = $request->direccion;
        $dato->telefono = $request->telefono;

        $dato->save();

        return redirect()->route('teacher.listar');
    }
}
