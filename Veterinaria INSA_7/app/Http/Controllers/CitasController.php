<?php

namespace App\Http\Controllers;

use App\Citas;
use App\User;
use Illuminate\Http\Request;
use DB;
use PhpParser\Node\Expr\AssignOp\Concat;


class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index()
    {

        $citas = DB::table('citas')
            ->select('citas.id as id','users.name','users.app','users.apm','users.email','citas.tel',
                'citas.mascota','citas.edad','citas.raza','citas.tratamiento','citas.cita','citas.vacunas')
            ->join('users','users.id', 'citas.id_users')
            //-> join('Categorias','idCategoria', '=', 'Categorias.id')

            ->where('citas.status','=','1')
            ->get();
        return view('citas.citas',['citas'=>$citas]);
    }


    public function inactivas()
    {

        $citas = DB::table('citas')
            ->select('citas.id as id','users.name','users.app','users.apm','users.email','citas.tel',
                'citas.mascota','citas.edad','citas.raza','citas.tratamiento','citas.cita','citas.vacunas')
            ->join('users','users.id', 'citas.id_users')
            //-> join('Categorias','idCategoria', '=', 'Categorias.id')

            ->where('citas.status','=','0')
            ->get();
        return view('citas.inactivas',['citas'=>$citas]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $user = User::all();

        $data1=$user->pluck('full_email','id');
        return view('citas.formulario',['users'=>$data1]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tel'=> 'required|numeric|between:1000000000,9999999999',
            'mascota'=> 'required|regex:/^[\pL\s]+$/u',
            'edad'=> 'required|numeric|between:00,99|min:0  ',
            'raza'=> 'required|regex:/^[\pL\s]+$/u',
            'tratamiento'=> 'required',
            'cita'=> 'required',
            'vacunas'=> 'required|regex:/^[\pL\s\,\{0-9}]+$/u',
            //'id_users'=>'required|unique:citas',


        ], [

            'tel.required'=>'* El campo Telefono es obligatorio',
            'tel.numeric'=>'* El  Telefono solo acepta numeros',
            'tel.between'=>'* El Telefono debe tener 10 caracteres sin espacio',

            'mascota.required'=>'* El nombre de la Mascota es obligatorio',
            'mascota.regex'=>'* El campo Mascota solo acepta letras',

            'edad.required'=>'* La Edad de la mascota es obligatorio',
            'edad.numeric'=>'* La Edad solo acepta numeros ',
            'edad.min'=>'* Ingrese un dato valido',
            'edad.between'=>'* Ingrese solo dos valores',

            'raza.required'=>'* El nombre de la Raza es obligatorio',
            'raza.regex'=>'* El campo Raza solo acepta letras',

            'tratamiento.required'=>'* El campo Tratamiento es obligatorio',

           // 'id_users.unique'=>'Ya se agendo una cita para este usuario, edite o elimine la anterior cita ',

        ]);

        $input = $request->all();
        $cita = new Citas();
        $cita->tel=$input['tel'];
        $cita->mascota=$input['mascota'];
        $cita->edad=$input['edad'];
        $cita->raza=$input['raza'];
        $cita->tratamiento=$input['tratamiento'];
        $cita->cita=$input['cita'];
        $cita->vacunas=$input['vacunas'];
        $cita->id_users=$input['id_users'];
        $cita->save();



        return redirect()->route('cita.index')->with('success','Registro exitoso');
        exit;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
   {
        $citas = DB::table('users')
            ->select('citas.id as id','citas.*')
            ->selectRaw('CONCAT(users.name," ",users.app," ",users.apm) as full_name')
             ->join('citas','users.id','citas.id_users')
             ->where('citas.id','=',$id)
            ->first();
       //$cita = Citas::find($id);
        //$users = DB::table('users')->where('app', '=', $id)->get();
        //$users = User::all();
        //dd($citas);
        //return view('citas.edit',['citas'=>$citas,'users'=>$users->pluck('users','id')]);

        return view('citas.edit',['citas'=>$citas]);
        exit;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $input = $request->all();
        $cita = Citas::find($id);
        $cita->tel=$input['tel'];
        $cita->mascota=$input['mascota'];
        $cita->edad=$input['edad'];
        $cita->raza=$input['raza'];
        $cita->tratamiento=$input['tratamiento'];
        $cita->cita=$input['cita'];
        $cita->vacunas=$input['vacunas'];
        $cita->update();


        return redirect()->route('cita.index')->with('success','Actualizacion exitosa');
        exit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

            $data=Citas::find($id);
            $data->status='0';
            $data->update();
            return redirect()->route('cita.index')
                ->with('success','Registro exitoso');

    }

    public function activar($id)
    {

        $data=Citas::find($id);
        $data->status='1';
        $data->update();
        return redirect()->route('cita.inactivas')
            ->with('success','Registro exitoso');

    }
}

