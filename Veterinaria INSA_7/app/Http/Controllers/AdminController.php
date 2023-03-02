<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('admin');
    }
    public function dashboard()
    {
    	
    	return view('admin.dashboard');
    }

    public function index()
    {

        $info=User::where('is_admin','=','0')->get();
        return view('users.usuarios',['usuarios'=>$info]);
    }

    public function admins()
    {
        $info=User::where('is_admin','=','1')->get();
        return view('users.admins',['admins'=>$info]);
    }


    public function activar($id)
    {
        $data=User::find($id);
        $data->is_admin='1';
        $data->update();
        return redirect()->route('usuarios.index')
            ->with('success','Registro exitoso');
    }

    public function desactivar($id)
    {
        $data=User::find($id);
        $data->is_admin='0';
        $data->update();
        return redirect()->route('admins.admins')
            ->with('success','Registro exitoso');
    }
}
