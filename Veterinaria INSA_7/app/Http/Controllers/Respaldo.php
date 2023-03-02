<?php

namespace App\Http\Controllers;

use App\Citas;
use App\User;
use Illuminate\Http\Request;
use DB;


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
        return view('citas.citas',['citas'=>$citas]);
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
            'tratamiento'=> 'required|regex:/^[\pL\s]+$/u',
            'cita'=> 'required',
            'vacunas'=> 'required|regex:/^[\pL\s\,\{0-9}]+$/u',
            'id_users'=>'required|unique:citas',


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
            'tratamiento.regex'=>'* El campo Tratamiento solo acepta letras',

            'id_users.unique'=>'Ya se agendo una cita para este usuario, edite o elimine la anterior cita ',

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
        $citas=Citas::find($id);
        $users = User::whereHas('citas',function ($query){$query->where('id_users' );})->get();
        echo($users);
        return view('citas.edit',['cita'=>$citas,'users'=>$users]);
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
}

