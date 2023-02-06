<?php

namespace App\Http\Controllers;

use App\Models\Semestre;
use Illuminate\Http\Request;

class SemestreController extends Controller
{
    public function semestre() {
        $semestres = Semestre::all();
        return view('semestre', ['semestres' => $semestres]);
    }

    public function ajoute() {
        return view('ajoute');
    }

    public function stored(Request $request) {
        
        Semestre::create([
            'nom' => $request->nom,
          
            
        ]);    
       
        return redirect('/semestre'); 

    }
}
 