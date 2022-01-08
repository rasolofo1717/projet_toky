<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        return view('etudiant');
    }

    public function enregistrer(Request $request)
    {
        Etudiant::create($request->all());
        return back();
    }
}
