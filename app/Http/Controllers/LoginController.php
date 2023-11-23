<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;//Importo el modelo de usuario ya que es el que usuare para iniciar sesion
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    //Muestra la pagina de login
    public function getLogin() {
        return view('login');
    }

    //Iniciar sesion
    public function postLogin(Request $request) {//Se reciben las credenciales que envia el usuario
        
        //Obtengo el valor de los campos del formulario de inicio de sesión que viene desde el objeto request
        $credentials = $request->only('correo','contraseña');
        
        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return redirect()->intended('/archivo_tramite');
        }

        // Autenticación fallida
        return redirect('/login')->with('error', 'Correo o contraseña incorrectos');
    }
}