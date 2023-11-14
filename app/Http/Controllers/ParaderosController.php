<?php

namespace App\Http\Controllers;

use App\Models\paraderos;
use Illuminate\Http\Request;

class ParaderosController extends Controller
{

    public function index()
    {
        $paraderos=paraderos::all();
        return response()->json($paraderos);
    }


    public function store(Request $request)
    {
        $producto=paraderos:: create( $request->post());
        return response()->json($producto);
    }


    public function show($id)
    {
        $paradero=paraderos::find($id);
        return response()->json($paradero);
    }


    public function update(Request $request , $id)
    {
        $paradero=paraderos::find($id);
        $paradero->fill($request->all())->save();
        return response()->json($paradero);
    }

    public function destroy($id)
    {
        $paradero=paraderos::destroy($id);
        return response()->json(['msj'=>'borrado ok']);
    }
}
