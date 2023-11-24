<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class PrincipalController extends Controller
{
    //Muestra la pagina principal
    public function getPrincipal() {
        if(auth()->check()){
            return view('principal');
        }else{
            return redirect('/login');
        }
    }

}