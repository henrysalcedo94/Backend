<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\apiCruds;

class UsuarioController extends Controller
{
    public function index()
    {
        return apiCruds::all();
    }

    public function store(Request $request)
    {
        $userCrud = apiCruds::create($request->all());
        return response()->json($userCrud, 201);
    }

    public function show($id)
    {
        return apiCruds::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $userCrud = apiCruds::findOrFail($id);
        $userCrud->update($request->all());
        return response()->json($userCrud, 200);
    }

    public function destroy($id)
    {
        apiCruds::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
