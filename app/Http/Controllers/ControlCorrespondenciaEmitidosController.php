<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ControlCorrespondenciaEmitido;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ControlCorrespondenciaEmitidosController extends Controller
{
    //Muestra la pagina de control_correspondencia_emitidos
    public function getControlCorrespondenciaEmitidos() {
        if(auth()->check()){

            // Obtener el usuario autenticado 
            $user = Auth::user();
            $tipo_usuario = $user->tipo_usuario;

            if($tipo_usuario === "1"){//Limitamos para que solo el usuario con el id 1 (responsabel correspondencia)... solo el pueda acceder a esa interfaz
                return view('control_correspondencia_emitidos');
            }else{//Sino eres el usuario con id 1... entonces.... no tienes acceso
                return redirect('/principal');
            }

        }else{
            return redirect('/login');
        }
    }

    //Captura los datos enviados desde el formulario y lo almacena en la base de datos
    public function postControlCorrespondenciaEmitidos(Request $request){
        $control_correspondencia_emitido =  new ControlCorrespondenciaEmitido;

        $control_correspondencia_emitido->fecha_emision = $request->fecha_emision;
        $control_correspondencia_emitido->no_oficio = $request->no_oficio;
        $control_correspondencia_emitido->nombre_destinatario = $request->nombre_destinatario; 
        $control_correspondencia_emitido->cargo_destinatario = $request->cargo_destinatario;
        $control_correspondencia_emitido->asunto = $request->asunto;
        $control_correspondencia_emitido->nombre_emisor = $request->nombre_emisor;
        $control_correspondencia_emitido->cargo_emisor = $request->cargo_emisor;
        $control_correspondencia_emitido->fecha_acuse = $request->fecha_acuse;
        $control_correspondencia_emitido->nombre_del_que_turna = $request->nombre_del_que_turna;
        $control_correspondencia_emitido->cargo_persona_turna = $request->cargo_persona_turna;
        $control_correspondencia_emitido->prioridad = $request->prioridad;
        $control_correspondencia_emitido->fecha_respuesta_acuse = $request->fecha_respuesta_acuse;
        $control_correspondencia_emitido->observaciones = $request->observaciones;
        $control_correspondencia_emitido->ubicacion = $request->ubicacion;

        $control_correspondencia_emitido->save();
        return response()->json(["result" => $control_correspondencia_emitido], 201);
    }
}