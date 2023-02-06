<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatiereController extends Controller
{
    public function matiere() {
        $matieres = Matiere::all();
        return view('matiere', ['matieres' => $matieres]);
    }

    public function ajouter() {
        return view('ajouter');
    }

    public function storer(Request $request) {
        
        Matiere::create([
            'nom' => $request->nom,
          
            
        ]);    
       
        return redirect('/matiere'); 

    }
}
