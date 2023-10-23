<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;
use App\Contrat; 
class OffreController extends Controller
{
    public function index()
    {
        $offres = Offre::all();
        return view('offres.index', compact('offres'));
    }

    public function create()
    {
        $contrats = Contrat::all(); // Récupérez la liste des contrats disponibles
        return view('offres.create', compact('contrats'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'commentaire' => 'required|string',
            'etudes' => 'required|string',
            'competences' => 'required|string',
            'periode' => 'required|string',
            'remuneration' => 'required|numeric',
            'contrat_id' => 'required|exists:contrats,id',
        ]);
    
        // Récupérez le contrat associé à l'ID
        $contrat = Contrat::findOrFail($request->input('contrat_id'));
    
        // Vérifiez si le contrat est déjà associé à une offre
        if ($contrat->offre) {
            return redirect()->route('offres.create')->with('error', 'Ce contrat est déjà affecté à une offre.');
        }
    
        // Si le contrat n'est pas associé à une offre, créez une nouvelle offre avec ce contrat
        $offre = Offre::create($validatedData);
        $contrat->offre()->associate($offre);
        $contrat->save();
        return redirect()->route('offres.index')->with('success', 'Offre ajoutée avec succès');
    }

    public function show(Offre $offre)
    {
        return view('offres.show', compact('offre'));
    }

    public function edit(Offre $offre)
    {
        return view('offres.edit', compact('offre'));
    }

    public function update(Request $request, Offre $offre)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'commentaire' => 'required|string',
            'etudes' => 'required|string',
            'competences' => 'required|string',
            'periode' => 'required|string',
            'remuneration' => 'required|numeric',
        ]);

        $offre->update($validatedData);

        return redirect()->route('offres.index')->with('success', 'Offre mise à jour avec succès');
    }

    public function destroy(Offre $offre)
    {
        $offre->delete();

        return redirect()->route('offres.index')->with('success', 'Offre supprimée avec succès');
    }
}
