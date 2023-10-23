<?php

namespace App\Http\Controllers;

use App\Contrat;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    public function index()
    {
        $contrats = Contrat::all();
        return view('contrats.index', compact('contrats'));
    }

    public function create()
    {
        return view('contrats.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titre' => 'required|string',
            'poste' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'remuneration' => 'required|numeric',
            'remarque' => 'nullable|string',
        ]);

        Contrat::create($data);

        return redirect()->route('contrats.index');
    }

    public function show(Contrat $contrat)
    {
        return view('contrats.show', compact('contrat'));
    }

    public function edit(Contrat $contrat)
    {
        return view('contrats.edit', compact('contrat'));
    }

    public function update(Request $request, Contrat $contrat)
    {
        $data = $request->validate([
            'titre' => 'required|string',
            'poste' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'remuneration' => 'required|numeric',
            'remarque' => 'nullable|string',
        ]);

        $contrat->update($data);

        return redirect()->route('contrats.index');
    }

    public function destroy(Contrat $contrat)
    {
        $contrat->delete();

        return redirect()->route('contrats.index');
    }
}
