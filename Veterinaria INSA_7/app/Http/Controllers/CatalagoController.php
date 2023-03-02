<?php

namespace App\Http\Controllers;

use App\Accesorios;
use Illuminate\Http\Request;
use App\Product;
use App\Account;

class CatalagoController extends Controller
{
    //
    public function listProducts(){


        $products = Product::where('status','=','1')->Where('categoria','=','producto')->get();
        return view('catalago', compact('products'));

    }
    
    public function getDetails($id)
    {
        //va a recibir el id
        //findOrFail busca el producto con ese id
        $product = Product::findOrFail($id);
        return view('details_usu', ['arrayProduct' => $product]);//retornar vista de details con el arreglo de producto

    }

    public function listAccesorios(){

        $products = Product::where('status','=','1')->Where('categoria','=','accesorio')->get();
        return view('modelados',compact('products'));

    }
    public function DetailsAcc($id)
    {

        $accesorios = Product::findOrFail($id);
        //dd($accesorios);

        return view('details_acc', ['arrayProduct' => $accesorios]);//retornar vista de details con el arreglo de producto
    }

    public function index($categoria)
     {
    //     $products = File::findOrFail($categoria);
    //     return view('modelados', compact('products', $categoria));
      //  dd($categoria);

        dd($categoria);
        $data = Product::findOrFail($categoria);
        return view('modelados', compact('products', 'Modelados'));
    }
}
