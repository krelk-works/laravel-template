<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Incidencia;

class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::user()->id;
        $usuario = User::findOrFail($id);

        $incidencias = [];

        if ($usuario->departamento === 'Informatica') {
            $incidencias = Incidencia::all();
        } else {
            $incidencias = Incidencia::where('nick', $usuario->nick)->get();
        }
        return view('incidencias.index', compact('usuario', 'incidencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id = Auth::user()->id;
        $usuario = User::findOrFail($id);
        return view('incidencias.create', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'descripcion' => 'required|string|max:200',
            'tipo' => 'required|string',
            'nick' => 'required|string',
            'estado' => 'required|string',
        ]);

        // Guardar el casal
        Incidencia::create($validated);

        return redirect()->route('incidencias.index')->with('success', 'S\'ha afegit correctament la nova incidencia');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $incidencia = Incidencia::findOrFail($id);

        return view('incidencias.edit', compact('incidencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $incidencia = Incidencia::findOrFail($id);
        $incidencia->estado = $request->estado;
        $incidencia->update();
        return redirect()->route('incidencias.index')->with('success', 'Incidencia actualitzada correctament!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function pdf()
    {
        
    }
}
