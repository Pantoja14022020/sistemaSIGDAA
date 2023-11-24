<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;//Importo el modelo de usuario ya que es el que usuare para iniciar sesion
use Illuminate\Support\Facades\Auth;
//use IlluminateSupportFacadesAuth;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    //Muestra la pagina de login
    public function getLogin() {
        return view('login');
    }

    //Iniciar sesion
    public function postLogin(Request $request) {//Se reciben las credenciales que envia el usuario
        
        /*$credentials = [
            'correo' => $request->correo,
            'password' => $request->contraseña,
        ];*/
        $credentials = $request->only('correo', 'password');
        //dd($credentials);
        //Obtengo el valor de los campos del formulario de inicio de sesión que viene desde el objeto request
        //dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            // Autenticación exitosa, redirige a la página que desees
            return redirect('/archivo_tramite');
        }else{
            dd('failed');
        }

        // Autenticación fallida
        return redirect('/login');
    }
}