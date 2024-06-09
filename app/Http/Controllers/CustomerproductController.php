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
        $customer = Customer::find($request->customer_id);
        $customer->products()->attach($request->product_id);

        
    }
}
