<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiant', compact('etudiants'));
    }

    public function enregistrer(Request $request)
    {
        Etudiant::create($request->all());
        return back()->with('success', "Enregistrement effectué");
    }

    public function supprimer($id) {
        Etudiant::find($id)->delete();
        return back()->with('success', "Suppression effectué");
    }

    public function editer($id) {
        $etudiant = Etudiant::find($id);
        return view('edit-etudiant', compact('etudiant'));
    }

    public function update($id, Request $request) {
        $etudiant = Etudiant::find($id)->update([
            'nom' => $request['nom'],
            'prenoms' => $request['prenoms'],
            'date_naiss' => $request['date_naiss']
        ]);
        return redirect()
            ->route('index.etudiant')->with('success', "Modification effectué");
    }
}
