<?php

namespace App\Http\Controllers;

use App\Accesorios;
use App\Productos;
use Illuminate\Http\Request;
use App\Product;


class ProductsController extends Controller
{
    //
    public function listProducts(){

        $productos=Productos::where('status','=','1')->Where('categoria','=','producto')->get();
        return view('products',compact('productos'));

    }

    public function inactivos(){

        $productos=Productos::where('status','=','0')->where('categoria','=','producto')->get();
        return view('products.inactivos',compact('productos'));
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nombre'=> 'required|regex:/^[\pL\s\-\{0-9}]+$/u',
            'precio'=>'required|numeric|between:000000,999999|min:1|regex:/^[\.\{0-9}]*$/',
            'cantidad'=> 'required|numeric|min:1|between:000000,999999|regex:/^([0-9])*$/',
            'marca'=> 'required|regex:/^[\pL\s\-\{0-9}]+$/u',
            'codigo'=> 'required|min:1',
            'descripcion'=> 'required|min:1',
            'file'=> 'required',
        ], [
            'nombre.required'=>'Este campo es obligatorio',
            'nombre.regex'=>'El campo nombre no acepta caraceteres especiales',

            'precio.required'=>'Este campo es obligatorio',
            'precio.numeric'=>'El campo precio venta solo acepta numeros',
            'precio.min'=>'* Ingrese un dato valido',
            'precio.between'=>'* Ingrese maximo 6 dígitos',
            'precio.regex'=>'Este campo no acepta caracteres especiales',

            'cantidad.required'=>'El campo cantidad es obligatorio',
            'cantidad.regex'=>'El campo cantidad no acepta caracteres especiales',
            'cantidad.numeric'=>'El campo cantidad solo acepta numeros',
            'cantidad.min'=>'* Ingrese un dato valido',
            'cantidad.between'=>'* Ingrese maximo 6 dígitos',

            'marca.required'=>'El campo Marca es obligatorio',
            'marca.regex'=>'Este campo no acepta caracteres especiales',

            'codigo.required'=>'El campo Código es obligatorio',

            'file.required'=>'El campo imagen es obligatorio',

        ]);

        $path = base_path() . '\\public\\imagenes_productos\\';
        $input = $request->all();
        $mime = $request->file('file')->getMimeType();
        $size = getimagesize($request->file('file'));
        $extension = strtolower($request->file('file')->getClientOriginalExtension());
        $nombre_imagen = "producto".date("Y-m-d_H_i_s").".".$extension;
        if($mime === 'image/jpeg' || $mime === 'image/jpg' || $mime === 'image/png'){
            $request->file('file')->move($path, $nombre_imagen);
        }
        var_dump($path);
        var_dump($mime);
        echo "<br>";
        var_dump($size);
        echo "<br>";
        var_dump("producto.".$extension);
        echo "<br>";
        var_dump($input);
        //--------------------------------------

        $input=$request->all();

        $datos = new Productos();
        $datos->nombre=$input["nombre"];
        $datos->precio=$input["precio"];
        $datos->cantidad=$input["cantidad"];
        $datos->marca=$input["marca"];
        $datos->codigo=$input["codigo"];
        $datos->descripcion=$input["descripcion"];
        $datos->categoria=$request->input('categoria','producto');
        $datos->foto=$nombre_imagen;
        $datos->save();
        return redirect()->route('producto.index')->with('success','Registro exitoso');
        exit;
    }

    //----------Editar

    public function edit($id)
    {
        $editar=Productos::find($id);
        return view('create',['producto'=>$editar]);
        exit;
    }

    public function updates(Request $request, $id)
    {

        $this->validate($request, [
            'nombre'=> 'required|regex:/^[\pL\s\-\{0-9}]+$/u',
            'precio'=>'required|numeric|between:000000,999999|min:1|regex:/^[\.\{0-9}]*$/',
            'cantidad'=> 'required|numeric|min:1|between:000000,999999|regex:/^([0-9])*$/',
            'marca'=> 'required|regex:/^[\pL\s\-\{0-9}]+$/u',
            'codigo'=> 'required|min:1',
            'descripcion'=> 'required|min:1',
        ], [
            'nombre.required'=>'Este campo es obligatorio',
            'nombre.regex'=>'El campo nombre no acepta caraceteres especiales',

            'precio.required'=>'Este campo es obligatorio',
            'precio.numeric'=>'El campo precio venta solo acepta numeros',
            'precio.min'=>'* Ingrese un dato valido',
            'precio.between'=>'* Ingrese maximo 6 dígitos',
            'precio.regex'=>'Este campo no acepta caracteres especiales',

            'cantidad.required'=>'El campo cantidad es obligatorio',
            'cantidad.regex'=>'El campo cantidad no acepta caracteres especiales',
            'cantidad.numeric'=>'El campo cantidad solo acepta numeros',
            'cantidad.min'=>'* Ingrese un dato valido',
            'cantidad.between'=>'* Ingrese maximo 6 dígitos',

            'marca.required'=>'El campo Marca es obligatorio',
            'marca.regex'=>'Este campo no acepta caracteres especiales',

            'codigo.required'=>'El campo Código es obligatorio',


        ]);



        if($request->file('file') !=null) {
            $path = base_path() . '\\public\\imagenes_productos\\';
            $mime = $request->file('file')->getMimeType();
            $size = getimagesize($request->file('file'));
            $extension = strtolower($request->file('file')->getClientOriginalExtension());
            $nombre_imagen = "producto".date("Y-m-d_H_i_s").".".$extension;
            if($mime === 'image/jpeg' || $mime === 'image/jpg' || $mime === 'image/png'){
                $request->file('file')->move($path, $nombre_imagen);
            }

            $input=$request->all();
            $datos = Productos::find($id);
            $datos->nombre=$input["nombre"];
            $datos->descripcion=$input["descripcion"];
            $datos->foto=$nombre_imagen;
            $datos->precio=$input["precio"];
            $datos->cantidad=$input["cantidad"];
            $datos->marca=$input["marca"];
            $datos->codigo=$input["codigo"];



        }else{
            $input = $request->all();
            $datos = Productos::find($id);
            $datos->nombre=$input["nombre"];
            $datos->descripcion=$input["descripcion"];
            $datos->precio=$input["precio"];
            $datos->cantidad=$input["cantidad"];
            $datos->marca=$input["marca"];
            $datos->codigo=$input["codigo"];

        }
        $datos->update();
        return redirect()->route('producto.index')->with('success','Actualizacion exitosa');

        exit;
    }

    public function destroy($id)
    {
        $data=Productos::find($id);
        $data->status='0';
        $data->update();
        return redirect()->route('producto.index')
            ->with('success','Registro exitoso');
    }

    public function activar($id)
    {
        $data=Productos::find($id);
        $data->status='1';
        $data->update();
        return redirect()->route('producto.inactivos')
            ->with('success','Registro exitoso');
    }


    //----------Accesorios---------------------------------------------------------
    public function index(){

        $productos=Productos::where('status','=','1')->where('categoria','=','accesorio')->get();
        return view('accesorio.accesorio',compact('productos'));

    }
    public function inactivosAccesorios()
    {
        $productos=Productos::where('status','=','0')->where('categoria','=','accesorio')->get();
        return view('accesorio.inactivos',compact('productos'));
    }
    public function create()
    {
        return view('accesorio.formulario');
    }
    public function crear(Request $request)
    {
        //
        $this->validate($request, [
            'nombre'=> 'required|regex:/^[\pL\s\-\{0-9}]+$/u',
            'precio'=>'required|numeric|between:000000,999999|min:1|regex:/^[\.\{0-9}]*$/',
            'cantidad'=> 'required|numeric|min:1|between:000000,999999|regex:/^([0-9])*$/',
            'marca'=> 'required|regex:/^[\pL\s\-\{0-9}]+$/u',
            'codigo'=> 'required|min:1',
            'descripcion'=> 'required|min:1',
            'file'=> 'required',
        ], [
            'nombre.required'=>'Este campo es obligatorio',
            'nombre.regex'=>'El campo nombre no acepta caraceteres especiales',

            'precio.required'=>'Este campo es obligatorio',
            'precio.numeric'=>'El campo precio venta solo acepta numeros',
            'precio.min'=>'* Ingrese un dato valido',
            'precio.between'=>'* Ingrese maximo 6 dígitos',
            'precio.regex'=>'Este campo no acepta caracteres especiales',

            'cantidad.required'=>'El campo cantidad es obligatorio',
            'cantidad.regex'=>'El campo cantidad no acepta caracteres especiales',
            'cantidad.numeric'=>'El campo cantidad solo acepta numeros',
            'cantidad.min'=>'* Ingrese un dato valido',
            'cantidad.between'=>'* Ingrese maximo 6 dígitos',

            'marca.required'=>'El campo Marca es obligatorio',
            'marca.regex'=>'Este campo no acepta caracteres especiales',

            'codigo.required'=>'El campo Código es obligatorio',

            'file.required'=>'El campo imagen es obligatorio',

        ]);

        $path = base_path() . '\\public\\imagenes_productos\\';
        $input = $request->all();
        $mime = $request->file('file')->getMimeType();
        $size = getimagesize($request->file('file'));
        $extension = strtolower($request->file('file')->getClientOriginalExtension());
        $nombre_imagen = "producto".date("Y-m-d_H_i_s").".".$extension;
        if($mime === 'image/jpeg' || $mime === 'image/jpg' || $mime === 'image/png'){
            $request->file('file')->move($path, $nombre_imagen);
        }
        var_dump($path);
        var_dump($mime);
        echo "<br>";
        var_dump($size);
        echo "<br>";
        var_dump("producto.".$extension);
        echo "<br>";
        var_dump($input);
        //--------------------------------------

        $input=$request->all();

        $datos = new Productos();
        $datos->nombre=$input["nombre"];
        $datos->precio=$input["precio"];
        $datos->cantidad=$input["cantidad"];
        $datos->marca=$input["marca"];
        $datos->codigo=$input["codigo"];
        $datos->descripcion=$input["descripcion"];
        $datos->categoria=$request->input('categoria','accesorio');
        $datos->foto=$nombre_imagen;
        $datos->save();
        return redirect()->route('accesorio.index')->with('success','Registro exitoso');
        exit;
    }
    public function editAcc($id)
    {
        $editar=Productos::find($id);
        return view('accesorio.formulario',['producto'=>$editar]);
        exit;
    }
    public function updatesAcc(Request $request, $id)
    {

        $this->validate($request, [
            'nombre'=> 'required|regex:/^[\pL\s\-\{0-9}]+$/u',
            'precio'=>'required|numeric|between:000000,999999|min:1|regex:/^[\.\{0-9}]*$/',
            'cantidad'=> 'required|numeric|min:1|between:000000,999999|regex:/^([0-9])*$/',
            'marca'=> 'required|regex:/^[\pL\s\-\{0-9}]+$/u',
            'codigo'=> 'required|min:1',
            'descripcion'=> 'required|min:1',
        ], [
            'nombre.required'=>'Este campo es obligatorio',
            'nombre.regex'=>'El campo nombre no acepta caraceteres especiales',

            'precio.required'=>'Este campo es obligatorio',
            'precio.numeric'=>'El campo precio venta solo acepta numeros',
            'precio.min'=>'* Ingrese un dato valido',
            'precio.between'=>'* Ingrese maximo 6 dígitos',
            'precio.regex'=>'Este campo no acepta caracteres especiales',

            'cantidad.required'=>'El campo cantidad es obligatorio',
            'cantidad.regex'=>'El campo cantidad no acepta caracteres especiales',
            'cantidad.numeric'=>'El campo cantidad solo acepta numeros',
            'cantidad.min'=>'* Ingrese un dato valido',
            'cantidad.between'=>'* Ingrese maximo 6 dígitos',

            'marca.required'=>'El campo Marca es obligatorio',
            'marca.regex'=>'Este campo no acepta caracteres especiales',

            'codigo.required'=>'El campo Código es obligatorio',


        ]);



        if($request->file('file') !=null) {
            $path = base_path() . '\\public\\imagenes_productos\\';
            $mime = $request->file('file')->getMimeType();
            $size = getimagesize($request->file('file'));
            $extension = strtolower($request->file('file')->getClientOriginalExtension());
            $nombre_imagen = "producto".date("Y-m-d_H_i_s").".".$extension;
            if($mime === 'image/jpeg' || $mime === 'image/jpg' || $mime === 'image/png'){
                $request->file('file')->move($path, $nombre_imagen);
            }

            $input=$request->all();
            $datos = Productos::find($id);
            $datos->nombre=$input["nombre"];
            $datos->descripcion=$input["descripcion"];
            $datos->foto=$nombre_imagen;
            $datos->precio=$input["precio"];
            $datos->cantidad=$input["cantidad"];
            $datos->marca=$input["marca"];
            $datos->codigo=$input["codigo"];



        }else{
            $input = $request->all();
            $datos = Productos::find($id);
            $datos->nombre=$input["nombre"];
            $datos->descripcion=$input["descripcion"];
            $datos->precio=$input["precio"];
            $datos->cantidad=$input["cantidad"];
            $datos->marca=$input["marca"];
            $datos->codigo=$input["codigo"];

        }
        $datos->update();
        return redirect()->route('accesorio.index')->with('success','Actualizacion exitosa');

        exit;
    }
    public function destroyAcc($id)
    {
        $data=Productos::find($id);
        $data->status='0';
        $data->update();
        return redirect()->route('accesorio.index')
            ->with('success','Registro exitoso');
    }
    public function activarAcc($id)
    {
        $data=Productos::find($id);
        $data->status='1';
        $data->update();
        return redirect()->route('accesorio.inactivos')
            ->with('success','Registro exitoso');
    }

    //----------Accesorios---------------------------------------------------------

    public function getApi()
    {
        $products = Product::all();//como se trata de exponer los datos, recuperar los datos de la bd, se recupera con la funcion all
        $json = array();//se crea la variable json yva hacer unn arreglo, de tipo array();
        foreach($products as $product){ //los datos en naranja a la escructura del json, el azul a la tabla, mediante for each imprime los datos
            $json[] = array(//linea 6por cada producto o registro en el objeto products, los trae, y mediante foreach, va desarmando uno por un producto, los imprime en formato json
                'id'=>$product->id,
                'nombre'=>$product->nombre,
                'precio'=>$product->precio,
                'foto'=>$product->foto,
                'descripcion'=>$product->descripcion,
                'categoria'=>$product->categoria,
                'cantidad'=>$product->cantidad,
            );
        }
        echo json_encode($json);//imprimir datos, json_enconde para imprimirlo en formato json
    }

    public function getDetailsApi($id)
    {
        $products = Product::findOrFail($id);//buscar el producto con la variable

        echo json_encode($products);
    }

        public function cart()
        {
        return view('cart');
        }

        public function addToCart($id)
        {
            $product = Product::findOrFail($id);//Busca el producto por medio del id
            $cart = session()->get('cart');//Devuelve el valor de la variable de sesión solicitada, o NULL si no está presente.
            // si el carrito está vacío, este es el primer producto
            if(!$cart) { //pregunta si el carro esta vacio
                $cart = [//agrega a carrito este producto con estos datos
                        $id => [
                            "nombre" => $product->nombre,
                            "cantidad" => 1,
                            "precio" => $product->precio,
                            "foto" => $product->foto
                        ]
                ]; 
                session()->put('cart', $cart);//agrega el carrito a la sesion
                return redirect()->back()->with('success', 'Producto agregado al carrito.');
            }

            // si el carrito no está vacío, verifique si este producto existe y luego incremente la cantidad
            if(isset($cart[$id])) {
     //isset ayuda a hacer referencia al producto
                $cart[$id]['cantidad']++; //incrementar id
                session()->put('cart', $cart); 
                return redirect()->back()->with('success', 'Producto agregado al carrito.');
     
            }
     
            // Si el artículo no existe en el carrito, agréguelo al carrito con cantidad = 1
            $cart[$id] = [
                "nombre" => $product->nombre,
                "cantidad" => 1,
                "precio" => $product->precio,
                "foto" => $product->foto
            ];
            session()->put('cart', $cart); 
            return redirect()->back()->with('success', 'Producto agregado al carrito.');
    
        }


    public function addCart($id)
    {
        $accesorios = Accesorios::findOrFail($id);//Busca el producto por medio del id
        $cart = session()->get('car');//Devuelve el valor de la variable de sesión solicitada, o NULL si no está presente.
        // si el carrito está vacío, este es el primer producto
        if(!$cart) { //pregunta si el carro esta vacio
            $cart = [//agrega a carrito este producto con estos datos
                $id => [
                    "nombre" => $accesorios->nombre,
                    "cantidad" => 1,
                    "precio" => $accesorios->precio,
                    "foto" => $accesorios->foto
                ]
            ];
            session()->put('cart', $cart);//agrega el carrito a la sesion
            return redirect()->back()->with('success', 'Accesorio agregado al carrito.');
        }

        // si el carrito no está vacío, verifique si este producto existe y luego incremente la cantidad
        if(isset($cart[$id])) {
            //isset ayuda a hacer referencia al producto
            $cart[$id]['cantidad']++; //incrementar id
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Accesorio agregado al carrito.');

        }

        // Si el artículo no existe en el carrito, agréguelo al carrito con cantidad = 1
        $cart[$id] = [
            "nombre" => $accesorios->nombre,
            "cantidad" => 1,
            "precio" => $accesorios->precio,
            "foto" => $accesorios->foto
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Accesorio agregado al carrito.');

    }

    //CARRITO ELIMINAR Y ACTUALIZAR
        public function update(Request $request)
        {
            if($request->id and $request->cantidad)        {
                $cart = session()->get('cart'); 
                $cart[$request->id]["cantidad"] = $request->cantidad; 
                session()->put('cart', $cart); 
                session()->flash('success', 'El carrito se ha actualizado.');
            }
        }
    
        public function remove(Request $request)
        {
            if($request->id) { 
                $cart = session()->get('cart'); 
                if(isset($cart[$request->id])) { 
                    unset($cart[$request->id]); 
                    session()->put('cart', $cart);
                } 
                session()->flash('success', 'Producto eliminado del carrito.');
            }
        }

    
}
