<?php

namespace App\Models;

use App\Models\Matiere;
use App\Models\Semestre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom'];

    public function matieres() {

        return $this->belongsToMany(Matiere::class)->withPivot('note1','examen');
    }

    

    public function semestres() {
        return $this->belongsToMany(Semestre::class);
    }
}
