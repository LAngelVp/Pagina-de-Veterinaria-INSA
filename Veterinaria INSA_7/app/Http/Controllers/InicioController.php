<?php

namespace App\Http\Controllers;

use App\Accesorios;
use Illuminate\Http\Request;
use App\Product;

class InicioController extends Controller
{
    //


    public function listProducts(){


        /*$products = Product::all(); 
        return view('products', compact('products'));*/
        //return view('products', compact('products'));
        /*$products = Product::all();
        return view('products', compact('products'));*/
        //return view('products');
       
        $products = Product::where('status', '=', '1')->get();

        return view('inicio', compact('products'));


       /* $products = Product::all(); 
        return view('products', compact('products'));*/
    }


    public function listAcc()
    {

        $products = Product::where('status', '=', '1')->get();
        return view('details_acc',['productos'=>$products]);

    }

    public function getDetails($id)
    {
        //va a recibir el id
        //findOrFail busca el producto con ese id
        $product = Product::findOrFail($id);
        return view('details_usu', ['arrayProduct' => $product]);//retornar vista de details con el arreglo de producto

    }

}
