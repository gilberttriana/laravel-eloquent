<?php
namespace App\Http\Controllers;

use App\Models\aula; // Importa el modelo Aula
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function index()
    {
        $aulas = aula::all();
        return view('aula', ['aulas' => $aulas]);
    }

    public function create()
    {
        return view('crearaula.crear');
    }

    public function store (Request $request)
    {
        $aula = new Aula();
        $aula->id = $request->input("id");
        $aula->nombre = $request->input("nombre");
        $aula->ubicacion = $request->input("ubicacion");
        $aula->save();
        return redirect()->route('aula.index');
    }


public function edit($id)
{
    $aula = Aula::find($id);
    return view('editaraula.editar', ['aula' => $aula]);
}


public function update(Request $request, $id)
{
    $aula = Aula::find($id);
    $aula->id = $request->get('id');
    $aula->nombre = $request->get('nombre');
    $aula->ubicacion = $request->get('ubicacion');
    $aula->save();

    return redirect()->route('aula.index')->with('success', 'Aula actualizada con éxito');
}

    public function show($id)
    {
        $aula = Aula::where('id', $id)->first();
        
        if ($aula === null) {
            return redirect()->route('aula.index')->with('error', 'Aula no encontrada');
        }
        
        return view('detalles_aula', ['aula' => $aula]);
    }
    
    public function destroy($id)
{
    $aula = Aula::where('id', $id)->first();

    if ($aula) {
        // Elimina el aula
        $aula->delete();

        return redirect()->route('aula.index')->with('success', 'Aula eliminada con éxito');
    } else {
        return redirect()->route('aula.index')->with('error', 'Aula no encontrada');
        }
    }
}