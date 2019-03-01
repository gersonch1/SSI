<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Gmail;
use Redirect;
use Session;

class GmailController extends Controller
{
//ingenieria.ventas@gmail.com
    public function vistar(){
        return view('contacto');
    }

    public function enviar(Request $request){
        
        Mail::to('transfacil.2018@gmail.com')->send(new Gmail($request));
        Session::flash('message','Correo Enviado');
        Session::flash('class','success');
        
        return Redirect::back();
    }
}
