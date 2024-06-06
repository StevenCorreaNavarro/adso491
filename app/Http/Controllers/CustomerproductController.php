<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomerproductController extends Controller
{
    public function asociar()
    {

        $customers = Customer::all();
        $products = Product::all();
        return view('customer_product.asociar', compact('customers', 'products'));
    }

    public function store(Request $request)
    {

        // $user = User::find($request->user_id);

        // $user->roles()->attach($request->role_id);
        return 'hola desde asociar';
    }
}
