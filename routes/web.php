<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('etudiant', [EtudiantController::class, 'index'])->name('etudiant');
Route::get('etudiant/create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('etudiant', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::get('etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show');
Route::get('etudiant/{etudiant}/edit', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('etudiant/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update');
Route::delete('delete/{etudiant}', [EtudiantController::class, 'delete'])->name('etudiant.delete');





   // return 'medali chihi';
;
