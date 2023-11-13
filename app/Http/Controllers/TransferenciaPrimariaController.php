<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransferenciaPrimaria;
use Symfony\Component\HttpFoundation\Response;

class TransferenciaPrimariaController extends Controller
{
    //Muestra la pagina de transferencia primaria
    public function getTransferenciaPrimaria() {
        return view('transferencia_primaria');
    }

    //Crea un registro de transferencia primaria
    public function postTransferenciaPrimaria(Request $request) {
        $transferencia_primaria = new TransferenciaPrimaria;

        $transferencia_primaria->numero_tp = $request->numero_tp;
        $transferencia_primaria->dep_o_unid = $request->dep_o_unid;
        $transferencia_primaria->cat_dep_o_unid = $request->cat_dep_o_unid;
        $transferencia_primaria->subcat_dep_o_unid = $request->subcat_dep_o_unid;
        $transferencia_primaria->area_generadora = $request->area_generadora;
        $transferencia_primaria->generadora = $request->generadora;
        $transferencia_primaria->seccion = $request->seccion;
        $transferencia_primaria->serie = $request->serie;
        $transferencia_primaria->no_caja = $request->no_caja;
        $transferencia_primaria->no_expediente = $request->no_expediente;
        $transferencia_primaria->t_expediente = $request->t_expediente;
        $transferencia_primaria->soporte = $request->soporte;
        $transferencia_primaria->f_apertura = $request->f_apertura;
        $transferencia_primaria->f_cierre = $request->f_cierre;
        $transferencia_primaria->n_legagos = $request->n_legagos;
        $transferencia_primaria->a_guarda = $request->a_guarda;
        $transferencia_primaria->f_valoracion = $request->f_valoracion;
        $transferencia_primaria->observaciones = $request->observaciones;
        $transferencia_primaria->u_topografia = $request->u_topografia;

        $transferencia_primaria->save();

        return response()->json(["result" => $transferencia_primaria], 201);
    }
}