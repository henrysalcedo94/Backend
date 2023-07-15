<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\frontendForm;

class frontendController extends Controller
{
    public function enviarMensaje(Request $request)
    {
        
        $validated = $request->validate([
            'nombre' => 'required',
            'numero' => 'required',
            'mensaje' => 'required'
        ]);
    
        
        $nombre = $request->input('nombre');
        $numero = $request->input('numero');
        $mensaje = $request->input('mensaje');
    
        
        $contact = frontendForm::create($request->all());
    
        return response()->json(['mensaje' => 'Mensaje enviado correctamente'], 201);
    }
    
    
    }
    