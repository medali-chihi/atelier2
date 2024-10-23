<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Classe;

class EtudiantController extends Controller
{
    public function index(){
        $liste = Etudiant::orderBy('nom', 'asc')->get();
        return view('etudiant', compact('liste'));
    }

    public function create(){
        $classes = Classe::all();
        return view('create', compact('classes'));
    }

    public function store(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe_id' => 'required' // Correction : change 'classes_id' à 'classe_id'
        ]);

        Etudiant::create($request->all());
        return redirect()->route('etudiant')
                         ->with('success', 'Student created successfully.');
    }

    public function edit(Etudiant $etudiant){
        $classes = Classe::all();
        return view('edit', compact('etudiant', 'classes'));
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe_id' => 'required' // Correction : change 'classes_id' à 'classe_id'
        ]);

        // Mise à jour correcte des données de l'étudiant
        $etudiant->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'classe_id' => $request->classe_id // Correction : change 'classes_id' à 'classe_id'
        ]);

        return redirect()->route('etudiant')
                         ->with('success', 'Student updated successfully.');
    }

    public function show(Etudiant $etudiant)
    {
        return view('show', compact('etudiant'));
    }
    public function delete(Etudiant $etudiant)
{
    $etudiant->delete();
    return redirect()->route('etudiant')->with('success', 'Student deleted successfully.');
}

    
}


