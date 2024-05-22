<?php
 namespace App\Http\Controllers;

use App\Models\Profesor; // Importa el modelo Profesor
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
   
    public function index()
    {
        $profesores = Profesor::all();
        return view('profesor', ['profesores' => $profesores]);
    }
    public function create()
    {
        return view('crearprofe.crear');
    }
    public function store (Request $request)
    {
        $profesor = new Profesor();
        $profesor->id = $request->input("id");
        $profesor->nombre = $request->input("nombre");
        $profesor->apellido = $request->input("apellido");
        $profesor->titulo = $request->input("titulo");
        $profesor->save();
        return redirect()->route('profesor.index');
    }
    
    
    public function edit($id)
{
    $profesor = Profesor::where('id', $id)->first();

    if ($profesor === null) {
        return redirect()->route('profesor.index')->with('error', 'Profesor no encontrado');
    }

    return view('editprofe', ['profesor' => $profesor]);
}

    


public function update(Request $request, $id)
{
    
    $profesores = Profesor::find($id);
    $profesores->id = $request->get('id');
    $profesores->nombre = $request->get('nombre');
    $profesores->apellido = $request->get('apellido');
    $profesores->titulo = $request->get('titulo');
    $profesores->save();

    return redirect()->route('profesor.index')->with('success', 'profe actualizada con éxito');

   }


    
    public function show($id)
    {
        $profesor = Profesor::where('id', $id)->first();
        
        if ($profesor === null) {
            // Redirige a una página de error o regresa con un mensaje de error
            return redirect()->route('profesor.index')->with('error', 'Profesor no encontrado');
        }
        
        return view('detalles_profesor', ['profesor' => $profesor]);
    }
    
    public function destroy($id)
    {
        $profesores = Profesor::where('id', $id)->first();

    if ($profesores) {
        // Elimina el aula
        $profesores->delete();

        return redirect()->route('profesor.index')->with('success', 'Aula eliminada con éxito');
    } else {
        return redirect()->route('profesor.index')->with('error', 'Aula no encontrada');
        }
    }

    
}                          