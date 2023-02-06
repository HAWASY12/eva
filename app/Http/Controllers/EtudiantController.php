<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use App\Models\Etudiant;
use App\Models\Semestre;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function etudiant() {
        $etudiants = Etudiant::all();
        $matieres = Matiere::all();
        $semestres = Semestre::all();
        return view('etudiant', ['etudiants' => $etudiants,'matieres'=>$matieres,'semestres'=>$semestres]);
    }

    public function ajout() {
        
        $matieres = Matiere::all();
        $semestres = Semestre::all();
        return view('ajout', ['matieres'=> $matieres,'semestres'=>$semestres] );
    }

    public function store(Request $request) {
        
        $etudiant = Etudiant::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            
        ]);   

        $etudiant->matieres()->attach([
            $request->matieres =>[
                'note1'=>$request->note1,
                'examen'=>$request->examen,
            ]

        ]) ;
        $etudiant->semestres()->attach($request->semestres) ;
       
        return redirect('/etudiant'); 

    }
}
 