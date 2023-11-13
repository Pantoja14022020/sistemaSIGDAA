<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Symfony\Component\HttpFoundation\Response;

class UsuarioController extends Controller
{

    //Mostrar pagina de registro de usuario
    public function getRegistro() { 
        return view('registro');
    }

    public function postUsuario(Request $request){
        $usuario = new Usuario;

        $usuario->tipo_usuario = $request->tipo_usuario;
        $usuario->nombre = $request->nombre;
        $usuario->apellido_paterno = $request->apellido_paterno;
        $usuario->apellido_materno = $request->apellido_materno;
        $usuario->numero_empleado = $request->numero_empleado;
        $usuario->dep_o_unid = $request->dep_o_unid;
        $usuario->cat_dep_o_unid = $request->cat_dep_o_unid;
        $usuario->subcat_dep_o_unid = $request->subcat_dep_o_unid;
        $usuario->cargo_o_funcion = $request->cargo_o_funcion;
        $usuario->ext_telefonica = $request->ext_telefonica;
        $usuario->correo = $request->correo;
        $usuario->contraseña = $request->contraseña;

        $usuario->save();

        return response()->json(["result" => $usuario], 201);
    }
}
