<?php

namespace App\Http\Controllers;

use App\Models\Clase; // Importa el modelo Clase
use Illuminate\Http\Request;

class ClaseController extends Controller
{
    public function index()
    {
        $clases = Clase::all();
        return view('crudclases.clase', ['clases' => $clases]);
    }

    public function create()
    {
        return view('crearclase.crear');
    }

    public function store(Request $request)
    {
        $clase = new Clase();
        $clase->codclase = $request->codclase;
        $clase->nombre = $request->nombre;
        $clase->credito = $request->credito;
        $clase->save();
        return redirect()->route('clase.index');
    }

    public function edit($codclase)
    {
        $clase = Clase::where('codclase', $codclase)->first();

        if ($clase === null) {
            return redirect()->route('clase.index')->with('error', 'Clase no encontrada');
        }

        return view('crudclases.editclase', ['clase' => $clase]);
    }

    public function update(Request $request, $codclase)
    {
        $clase = Clase::where('codclase', $codclase)->first();

        if ($clase) {
            $clase->codclase = $request->codclase;
            $clase->nombre = $request->nombre;
            $clase->credito = $request->credito;
            $clase->save();

            return redirect()->route('clase.show', ['codclase' => $clase->codclase]);
        } else {
            return redirect()->route('clase.index');
        }
    }

    public function show($codclase)
    {
        $clase = Clase::where('codclase', $codclase)->first();

        if ($clase === null) {
            return redirect()->route('clase.index')->with('error', 'Clase no encontrada');
        }

        return view('detalles_clase', ['clase' => $clase]);
    }

    public function destroy($codclase)
    {
        $clase = Clase::where('codclase', $codclase)->first();

        if ($clase) {
            $clase->delete();
            return redirect()->route('clase.index');
        } else {
            return redirect()->route('clase.index');
        }
    }
}