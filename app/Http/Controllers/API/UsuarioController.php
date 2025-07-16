<?php
namespace App\Http\Controllers\API;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    public function index() {
        return Usuario::all();
    }

    public function store(Request $request) {
        return Usuario::create($request->all());
    }

    public function show($id) {
        return Usuario::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
        return $usuario;
    }

    public function destroy($id) {
        return Usuario::destroy($id);
    }
}

