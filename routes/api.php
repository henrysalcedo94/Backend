<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\frontendController;

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
Route::get('/crud', [UsuarioController::class,'index']);
Route::post('/crud', [UsuarioController::class,'store']);
Route::get('/crud/{id}', [UsuarioController::class,'show']);
Route::put('/crud/{id}', [UsuarioController::class,'update']);
Route::delete('/crud/{id}', [UsuarioController::class,'destroy']);




Route::post('/frontend', [frontendController::class,'enviarMensaje']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
