<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Pregunta;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    function index()
    {
        return view('contacto');
    }
    public function send(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'message' =>  'required'
        ]);

        $data = array(
            'name'      =>  $request->input('name'),
            'message'   =>   $request->input('message'),
            'mail'   =>   $request->input('mail')

        );

        $email = $request->input('email','rafaelluncarv@gmail.com');

        Mail::to($email)->send(new Pregunta($data));

        return back()->with('success', 'Enviado exitosamente!');

    }
}
