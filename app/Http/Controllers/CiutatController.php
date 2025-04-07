<?php

namespace App\Http\Controllers;

use App\Models\Ciutat;
use Illuminate\Http\Request;

class CiutatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ciutats = Ciutat::all();
        return view('ciutats.index', compact('ciutats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ciutats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255|unique:ciutats,nom',
            'n_habitants' => 'required|integer|min:1',
        ]);

        // Guardar el casal
        Ciutat::create($validated);

        return redirect()->route('casal.index')->with('success', 'S\'ha afegit correctament la nova ciutat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ciutat = Ciutat::findOrFail($id);
        return view('ciutats.show', compact('ciutat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ciutat = Ciutat::findOrFail($id);

        return view('ciutats.edit', compact('ciutat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ciutat = Ciutat::findOrFail($id);

        $validated = $request->validate([
            'nom' => 'required|string|max:255|unique:ciutats,nom,' . $ciutat->id,
            'n_habitants' => 'required|integer|min:1',
        ]);

        $ciutat->update($validated);

        return redirect()->route('ciutat.index')->with('success', 'Ciutat actualitzada correctament!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ciutat $ciutat)
    {
        $ciutat->delete();
        return redirect()->route('ciutat.index')->with('success', 'La ciutat s\'ha elimina correctament.');
    }
}
