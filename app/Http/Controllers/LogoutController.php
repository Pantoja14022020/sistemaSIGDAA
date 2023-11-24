<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LogoutController extends Controller
{
    //Muestra la pagina de login
    public function getLogout() {
        Auth::logout();
        return redirect('/login');
    }

}