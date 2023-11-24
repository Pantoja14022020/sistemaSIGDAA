<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ControlCorrespondenciaRecibido;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ControlCorrespondenciaRecibidosController extends Controller
{
    //Muestra la pagina de control_correspondencia_recibidos
    public function getControlCorrespondenciaRecibidos() {
        if(auth()->check()){

            // Obtener el usuario autenticado 
            $user = Auth::user();
            $tipo_usuario = $user->tipo_usuario;

            if($tipo_usuario === "1"){//Limitamos para que solo el usuario con el id 1 (responsabel correspondencia)... solo el pueda acceder a esa interfaz
                return view('control_correspondencia_recibidos');
            }else{//Sino eres el usuario con id 1... entonces.... no tienes acceso
                return redirect('/principal');
            }

        }else{
            return redirect('/login');
        }
    }

    //Captura los datos enviados desde el formulario y lo almacena en la base de datos
    public function postControlCorrespondenciaRecibidos(Request $request){
        $control_correspondencia_recibido =  new ControlCorrespondenciaRecibido;

        $control_correspondencia_recibido->fecha_emision = $request->fecha_emision;
        $control_correspondencia_recibido->no_oficio = $request->no_oficio;
        $control_correspondencia_recibido->nombre_remitente = $request->nombre_remitente; 
        $control_correspondencia_recibido->cargo_remitente = $request->cargo_remitente;
        $control_correspondencia_recibido->asunto = $request->asunto;
        $control_correspondencia_recibido->tipo_prioridad = $request->tipo_prioridad;
        $control_correspondencia_recibido->turnar_nombre = $request->turnar_nombre;
        $control_correspondencia_recibido->turnar_cargo = $request->turnar_cargo;
        $control_correspondencia_recibido->observaciones = $request->observaciones;
        $control_correspondencia_recibido->ubicacion = $request->ubicacion;

        $control_correspondencia_recibido->save();
        return response()->json(["result" => $control_correspondencia_recibido], 201);
    }
}