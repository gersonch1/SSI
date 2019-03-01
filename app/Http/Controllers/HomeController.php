<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
   
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacio = null;
        $inventario = \DB::table('inventario')
        ->select(\DB::raw('count(ID_INVENTARIO) as Cantidad'))
        ->where('ESTADO', '=', 'En uso')
        ->get()->first();

        $trabajoscurso = \DB::table('orden_trabajo')
        ->select(\DB::raw('count(ID_OT) as cantidad'))
        ->where('FECHA_TERMINO', '=', $vacio)
        ->get()->first();
        
        
        $materialenespera = \DB::table('material')
        ->select(\DB::raw('count(ID_MATERIAL) as cantidad'))
        ->where('SEGUIMIENTO_MATERIAL', '=', 'En Espera de Material')
        ->get()->first();

        $clientes = \DB::table('clientes')
        ->select(\DB::raw('count(RUT_CLIENTE) as cantidad'))
        ->get()->first();
        
        $cotizaciones = \DB::table('cotizacion')
        ->select(\DB::raw('count(ID_COTIZACION) as cantidad'))
        ->where('ESTADO','=','Aceptada')
        ->get()->first();

        $convenios = \DB::table('convenios')
        ->select(\DB::raw('count(ID_CONVENIO) as cantidad'))
        ->get()->first();

        $personal = \DB::table('personal')
        ->select(\DB::raw('count(RUTP) as cantidad'))
        ->get()->first();
      
        return view('/intranet/index')->with('personal',$personal)->with('convenios',$convenios)->with('cotizaciones',$cotizaciones)->with('clientes',$clientes)->with('materialenespera',$materialenespera)->with('inventario',$inventario)->with('trabajoscurso',$trabajoscurso);
    }
}
