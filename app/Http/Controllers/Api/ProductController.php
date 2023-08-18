<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
       $products = Product::all;
       return $products;
    }

    
    public function store(Request $request)
    {
        $product = new Product();
        $product->nombre = $request -> nombre;
        $product->correo = $request -> correo;
        $product->cantidad_tickets= $request-> cantidad_tickets;
        $product->ubicacion =$request-> ubicacion; 
        $product->mes_funcion =$request->mes_funcion;
        $product->dia_funcion=$request->dia_funcion;
        $product->hora_funcion=$request->hora_funcion;

        $product->save();

    }

   
    public function show(string $id)
    {
        $product=Product::find ($id);
        return $product;
    }
    
    
    public function update(Request $request, string $id)
    {
        $product= Product :: findOrFail($request->id);
        $product->nombre = $request -> nombre;
        $product->correo = $request -> correo;
        $product->cantidad_tickets= $request-> cantidad_tickets;
        $product->ubicacion =$request-> ubicacion; 
        $product->mes_funcion =$request->mes_funcion;
        $product->dia_funcion=$request->dia_funcion;
        $product->hora_funcion=$request->hora_funcion;

        $product->save();
        return $product;
    }

    
    public function destroy(string $id)
    {
        $product = Product::destroy($id);
        return $product;
    }
}
