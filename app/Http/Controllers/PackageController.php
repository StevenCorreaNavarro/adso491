<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function listar()
    {
        $paquetes = Package::orderBy('id', 'desc')->get();
        return view('package_c.listar', compact('paquetes'));
    }
    public function create()
    { // crear formulario

        return view('package_c.create');
    }
    public function store(Request $request)
    {
        $paq = new Package();

        $paq->codigo = $request->codigo;
        $paq->descripcion = $request->descripcion;
        $paq->destinatario = $request->destinatario;
        $paq->direcciones = $request->direcciones;
        $paq->save();
        // return $curso;
        return redirect()->route('package.listar');        // para llevar al la lista o direccionar
    }

    public function show( $id)
    { //$id
        $paq=Package::find($id);
        return view('package_c.show', compact('paq'));
    }

    public function destroy(Package $paq)
    {
        $paq->delete();
        return redirect()->route('package.listar');
    }

    //Edit
    public function edit(Package $paq)
    { //Encuentro el Curso

        return view('package_c.edit', compact('paq'));
    }

    //Update
    public function update(Request $request, Package $paq)
    {

        $paq->codigo = $request->codigo;
        $paq->descripcion = $request->descripcion;
        $paq->destinatario = $request->destinatario;
        $paq->direcciones = $request->direcciones;
        $paq->save();

        return redirect()->route('package.listar');
    }
}

