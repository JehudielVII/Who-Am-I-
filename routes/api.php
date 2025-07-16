<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UsuarioController;
use App\Http\Controllers\API\FraseAlientoController;
use App\Http\Controllers\API\RespuestaRapidaController;
use App\Http\Controllers\API\EtapaEnfermedadController;
use App\Http\Controllers\API\RecuerdoController;
use App\Http\Controllers\API\ConfiguracionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('usuarios', UsuarioController::class);
Route::get('/frases-aliento', [FraseAlientoController::class, 'porFecha']);
Route::get('respuestas-rapidas', [RespuestaRapidaController::class, 'index']);
Route::apiResource('etapas-enfermedad',EtapaEnfermedadController::class);
Route::apiResource('recuerdos', RecuerdoController::class);
Route::apiResource('configuracion', ConfiguracionController::class);
