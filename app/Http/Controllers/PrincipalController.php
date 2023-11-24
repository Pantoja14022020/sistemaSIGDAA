<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PrincipalController extends Controller
{
    //Muestra la pagina principal
    public function getPrincipal() {
        return view('principal');
    }

}