<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventario;
class ApiController extends Controller
{
    public function create(Request $request){
        $inventarios = new Inventario();
        $inventarios->fproducto = $request->input('fproducto');
        $inventarios->fcategoria = $request->input('fcategoria');
        $inventarios->fprecio = $request->input('fprecio');

        $inventarios->save();
        return response()->json($inventarios);

    }
}
