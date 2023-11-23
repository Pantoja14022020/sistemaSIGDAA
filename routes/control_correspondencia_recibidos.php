<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlCorrespondenciaRecibidosController;
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


Route::get('/control_correspondencia_recibidos', [ControlCorrespondenciaRecibidosController::class, 'getControlCorrespondenciaRecibidos']);
Route::post('/control_correspondencia_recibidos', [ControlCorrespondenciaRecibidosController::class, 'postControlCorrespondenciaRecibidos']);