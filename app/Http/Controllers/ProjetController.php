<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index (){
        $liste_projets = Projet::all();
        return view("projets.liste", ["nos_projets" => $liste_projets]);
    }

    public function create ()
    {
        return view("projets.create");
    }

    public function ajouter_projet_traitement(Request $request){
        $request->validate([
            'code' => 'required',
            'nom' => 'required',
            'description' => 'required',
            'budget' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'statut' => 'required',

        ]);

        $projets = new Projet();
        $projets->code = $request->code;
        $projets->nom = $request->nom;
        $projets->description = $request->description;
        $projets->budget = $request->budget;
        $projets->date_debut = $request->date_debut;
        $projets->date_fin = $request->date_fin;
        $projets->statut = $request->statut;
        $projets->save();

        return redirect('create-projet')->with('status', 'Le projet a bien été ajouté avec succès.');
    }


    public function update_projet($id)
    {
        $projets = Projet::find($id);

        return view('projets.update', compact('projets'));
    }

    public function update_projet_traitement(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'nom' => 'required',
            'description' => 'required',
            'budget' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'statut' => 'required',

        ]);

        $projets = Projet::find($request->id);
        $projets->code = $request->code;
        $projets->nom = $request->nom;
        $projets->description = $request->description;
        $projets->budget = $request->budget;
        $projets->date_debut = $request->date_debut;
        $projets->date_fin = $request->date_fin;
        $projets->statut = $request->statut;
        $projets->update();

        return redirect('liste-projets')->with('status', 'Le projet a bien été modifié avec succès.');
    }

    
    public function delete_projet($id)
    {
        $projets = Projet::find($id);
        $projets->delete();

        return redirect('liste-projets')->with('status', 'Le projet a bien été supprimé avec succès.');
    }
}
