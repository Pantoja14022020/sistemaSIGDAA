<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    //Muestra la pagina de administrador
    public function getAdmin() {
        return view('admin');
    }

}