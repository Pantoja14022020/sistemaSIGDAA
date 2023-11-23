<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlCorrespondenciaEmitidosController;
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


Route::get('/control_correspondencia_emitidos', [ControlCorrespondenciaEmitidosController::class, 'getControlCorrespondenciaEmitidos']);
Route::post('/control_correspondencia_emitidos', [ControlCorrespondenciaEmitidosController::class, 'postControlCorrespondenciaEmitidos']);