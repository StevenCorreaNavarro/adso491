<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listar()
    {
        $datos = Product::orderBy('id', 'desc')->get();
        return view('product.listar', compact('datos'));
    }
    public function create()
    { // crear formulario
        return view('product.create');
    }

    public function store(Request $request)
    {
        $dato = new Product();
// 
        $dato->codigo = $request->codigo;
        $dato->existencia = $request->existencia;
        $dato->descripcion = $request->descripcion;
        $dato->precio = $request->precio;
        $dato->save();
        // return $curso;
        return redirect()->route('product.listar');        // para llevar al la lista o direccionar
    }

    public function show( $id)
    { //$id
        $dato=Product::find($id);
        return view('Product.show', compact('dato'));
    }

    public function destroy(Product $dato)
    {
        $dato->delete();
        return redirect()->route('product.listar');
    }

    //Edit
    public function edit(Product $dato)
    { //Encuentro el Curso
        return view('product.edit', compact('dato'));
    }

    //Update
    public function update(Request $request,Product $dato)
    {
        $dato->codigo = $request->codigo;
        $dato->existencia = $request->existencia;
        $dato->descripcion = $request->descripcion;
        $dato->precio = $request->precio;
        $dato->save();

        return redirect()->route('product.listar');
    }
}
