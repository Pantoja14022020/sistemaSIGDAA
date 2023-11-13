<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArchivoTramiteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/archivo_tramite', [ArchivoTramiteController::class, 'getArchivoTramite']);
Route::post('/archivo_tramite', [ArchivoTramiteController::class, 'postArchivoTramite']);