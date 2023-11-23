<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ControlCorrespondenciaRecibido;
use Symfony\Component\HttpFoundation\Response;

class ControlCorrespondenciaRecibidosController extends Controller
{
    //Muestra la pagina de control_correspondencia_recibidos
    public function getControlCorrespondenciaRecibidos() {
        return view('control_correspondencia_recibidos');
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