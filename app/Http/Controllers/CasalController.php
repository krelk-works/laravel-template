<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casal;
use App\Models\Ciutat;

class CasalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casals = Casal::with('ciutat')->get();
        return view('casals.index', compact('casals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ciutats = Ciutat::all();
        return view('casals.create', compact('ciutats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validación de los datos del formulario
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'data_inici' => 'required|date',
            'data_final' => 'required|date|after_or_equal:data_inici',
            'n_places' => 'required|integer|min:1',
            'id_ciutat' => 'required|exists:ciutats,id',
        ]);

        // Guardar el casal
        Casal::create($validated);

        return redirect()->route('casal.index')->with('success', 'Casal creat correctament!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $casal = Casal::findOrFail($id);
        return view('casals.show', compact('casal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $casal = Casal::findOrFail($id);
        $ciutats = Ciutat::all();
        return view('casals.edit', compact('casal', 'ciutats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $casal = Casal::findOrFail($id);
        // 1. Validación de los datos
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'data_inici' => 'required|date',
            'data_final' => 'required|date|after_or_equal:data_inici',
            'n_places' => 'required|integer|min:1',
            'id_ciutat' => 'required|exists:ciutats,id',
        ]);

        // 2. Actualizar el casal con los datos validados
        $casal->update($validated);

        // 3. Redirigir con mensaje de éxito
        return redirect()->route('casal.index')->with('success', 'Casal actualitzat correctament!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Casal $casal)
    {
        $casal->delete();
        return redirect()->route('casal.index')->with('success', 'Casal eliminat correctament!');
    }
}
