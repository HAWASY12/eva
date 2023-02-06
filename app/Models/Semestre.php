<?php

namespace App\Models;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Semestre extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];

    public function etudiants() {
        return $this->belongsToMany(Etudiant::class);
    }
}
