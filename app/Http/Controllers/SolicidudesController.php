<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\solicitud;

class SolicidudesController extends Controller
{
    public function store(Request $request)
    {
        //request()->ip()
        //request()->getClientIp()

        $request->validate([
            'nombre'=>'required|min:3'
        ]);

        $solicitud = new solicitud;
        $solicitud->nombre = $request->nombre;
        $solicitud->extra = '';
        $solicitud->sessionid = $request->session;
        $solicitud->ip = request()->ip();
        $solicitud->save();

        return redirect()->route('inicio')->With('exito','Solicitud añadida con exito');
    }

    public function index()
    {
        $tabla = solicitud::all();
        
        return view('admin',['solicitudes'=>$tabla]);

    }

}
