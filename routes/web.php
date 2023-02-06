<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\EtudiantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/etudiant', [EtudiantController::class, 'etudiant'])->name('liste.etudiant');
Route::post('/store', [EtudiantController::class, 'store'])->name('store.etudiant');
Route::get('/ajout', [EtudiantController::class, 'ajout'])->name('ajout.etudiant');

Route::get('/matiere', [MatiereController::class, 'matiere'])->name('liste.matiere');
Route::post('/storer', [MatiereController::class, 'storer'])->name('storer.matiere');
Route::get('/ajouter', [MatiereController::class, 'ajouter'])->name('ajouter.matiere');

Route::get('/semestre', [SemestreController::class, 'semestre'])->name('liste.semestre');
Route::post('/stored', [SemestreController::class, 'stored'])->name('stored.semestre');
Route::get('/ajoute', [SemestreController::class, 'ajoute'])->name('ajoute.semestre');

