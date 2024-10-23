<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/etudiant', [EtudiantController::class,"index"])->name('etudiant') ;
Route::get('/create', [EtudiantController::class,"create"])->name('etudiant.create') ;
Route::post('/create', [EtudiantController::class,"store"])->name('etudiant.ajouter') ;


   // return 'medali chihi';
;
