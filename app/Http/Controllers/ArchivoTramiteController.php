<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArchivoTramite;
use Symfony\Component\HttpFoundation\Response;

class ArchivoTramiteController extends Controller
{
    //Muestra la pagina de archivo de tramite
    public function getArchivoTramite() {
        return view('archivo_tramite');
    }

    //Crea un registro de archivo de tramite
    public function postArchivoTramite(Request $request) {
        $archivo_tramite = new ArchivoTramite;

        $archivo_tramite->dep_o_unid = $request->dep_o_unid;
        $archivo_tramite->cat_dep_o_unid = $request->cat_dep_o_unid;
        $archivo_tramite->subcat_dep_o_unid = $request->subcat_dep_o_unid;
        $archivo_tramite->area_generadora = $request->area_generadora;
        $archivo_tramite->generadora = $request->generadora;
        $archivo_tramite->seccion = $request->seccion;
        $archivo_tramite->serie = $request->serie;
        $archivo_tramite->no_consecutivo = $request->no_consecutivo;
        $archivo_tramite->titulo_expediente = $request->titulo_expediente;
        $archivo_tramite->tipo_archivo = $request->tipo_archivo;
        $archivo_tramite->f_apertura = $request->f_apertura;
        $archivo_tramite->f_cierre = $request->f_cierre;
        $archivo_tramite->n_legajos = $request->n_legajos;
        $archivo_tramite->a_guarda = $request->a_guarda;
        $archivo_tramite->u_topografia = $request->u_topografia;
        $archivo_tramite->observaciones = $request->observaciones;

        $archivo_tramite->save();

        return response()->json(["result" => $archivo_tramite], 201);
    }
}