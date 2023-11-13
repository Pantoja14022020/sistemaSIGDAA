<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransferenciaPrimariaController;
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


Route::get('/transferencia_primaria', [TransferenciaPrimariaController::class, 'getTransferenciaPrimaria']);
Route::post('/transferencia_primaria', [TransferenciaPrimariaController::class, 'postTransferenciaPrimaria']);