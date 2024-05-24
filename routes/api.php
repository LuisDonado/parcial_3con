<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\TratamientoController;
use App\Http\Controllers\HistorialMedicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('/pacientes', PacienteController::class);
Route::apiResource('/facturas', FacturaController::class);
Route::apiResource('/empleados', EmpleadoController::class);
Route::apiResource('/citas', CitaController::class);
Route::apiResource('/tratamientos', TratamientoController::class);
Route::apiResource('/historialesmedicos', HistorialMedicoController::class);



